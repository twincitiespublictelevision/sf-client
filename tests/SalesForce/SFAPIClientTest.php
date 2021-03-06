<?php

namespace Tests;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\Psr7\Response;
use PHPUnit\Framework\TestCase;
use SFClient\Auth\PasswordAuth;
use SFClient\Exceptions\FailedToAuthenticate;
use SFClient\Result\BoolResult;
use SFClient\Result\Result;
use SFClient\Result\SFCreationResult;
use SFClient\Result\SFObjectResult;
use SFClient\Result\SFRecordsResult;
use SFClient\SalesForce\SFCreation;
use SFClient\SalesForce\SFObject;
use SFClient\SalesForce\SFRecords;
use SFClient\SalesForce\SFAPIClient;

class SFAPIClientTest extends TestCase {
  public function fixtures() {
    $auth = $this->getMockBuilder(PasswordAuth::class)
      ->disableOriginalConstructor()
      ->getMock();

    $client = $this->getMockBuilder(Client::class)
      ->setConstructorArgs([['base_uri' => 'https://localhost/']])
      ->getMock();

    return [$auth, $client];
  }

  public function testAuthenticatesOnConstruction() {
    list($auth, $client) = $this->fixtures();

    $auth->method('getTokenFromResponse')->willReturn('12345');

    $client->expects($this->once())
      ->method('send')
      ->willReturn(new Response());

    SFAPIClient::connectWith($client, $auth);
  }

  public function testConstructionThrowsIfAuthenticationFails() {
    list($auth, $client) = $this->fixtures();

    $this->expectException(FailedToAuthenticate::class);

    $auth->method('getTokenFromResponse')->willReturn(null);

    $client->expects($this->once())
      ->method('send')
      ->willReturn(new Response());

    SFAPIClient::connectWith($client, $auth);
  }

  public function testScopesToObjectType() {
    list($auth, $client) = $this->fixtures();

    $auth->method('getTokenFromResponse')->willReturn('12345');

    $client->expects($this->once())
      ->method('send')
      ->willReturn(new Response());

    $sf = SFAPIClient::connectWith($client, $auth);
    $scoped = $sf->scope('testType');

    $this->assertEquals('testType', $scoped->getScope());
  }

  public function testAddsAuthenticationToRequest() {
    list($auth, $client) = $this->fixtures();

    $auth->method('getTokenFromResponse')->willReturn('12345');

    $client->expects($this->once())
      ->method('send')
      ->willReturn(new Response());

    $sf = SFAPIClient::connectWith($client, $auth);

    $req = $sf->authenticatedRequest(new Request('GET', '/'));

    $this->assertEquals(['Bearer 12345'], $req->getHeader('Authorization'));
  }

  public function testConstructsObjectUris() {
    list($auth, $client) = $this->fixtures();

    $auth->method('getTokenFromResponse')->willReturn('12345');

    $client->expects($this->once())
      ->method('send')
      ->willReturn(new Response());

    $sf = SFAPIClient::connectWith($client, $auth);

    $this->assertEquals('sobjects/testType', $sf->o('testType'));
    $this->assertEquals('sobjects/testType/12345', $sf->o('testType', '12345'));
  }

  public function testRunAddsAuthenticationToRequests() {
    list($auth, $client) = $this->fixtures();

    $auth->method('getTokenFromResponse')->willReturn('12345');

    $client->expects($this->exactly(2))
      ->method('send')
      ->withConsecutive(
        [$this->callback(function() { return true; })],
        [$this->callback(function(Request $arg) {
          return $arg->getHeader('Authorization')[0] === 'Bearer 12345';
        })]
      )
      ->willReturn(new Response());

    $sf = SFAPIClient::connectWith($client, $auth);

    $sf->run(new Request('GET', '/'));
  }

  public function testRunHandlesExeceptions() {
    list($auth, $client) = $this->fixtures();

    $auth->method('getTokenFromResponse')->willReturn('12345');

    $error = new RequestException(
      'Request failure',
      new Request('GET', '/'),
      new Response(500, [], '{"message": "server error"}')
    );

    $client->method('send')
      ->willReturnOnConsecutiveCalls(
        new Response(),
        $this->returnCallback(function() use ($error) {
          throw $error;
        })
      );

    $sf = SFAPIClient::connectWith($client, $auth);

    $this->assertEquals(Result::err($error), $sf->run(new Request('GET', '/')));
  }

  public function testRunReturnsOkJson() {
    list($auth, $client) = $this->fixtures();

    $auth->method('getTokenFromResponse')->willReturn('12345');

    $client->method('send')
      ->willReturnOnConsecutiveCalls(
        new Response(),
        new Response(200, [], '{"message": "ok"}')
      );

    $sf = SFAPIClient::connectWith($client, $auth);

    $this->assertEquals(
      Result::ok(json_decode('{"message": "ok"}')),
      $sf->run(new Request('GET', '/'))
    );
  }

  /**
   * CREATE
   */

  public function testCreateHandlesErrorResult() {
    list($auth, $client) = $this->fixtures();

    $error = new RequestException(
      'Request failure',
      new Request('GET', '/'),
      new Response(500, [], '{"message": "server error"}')
    );

    $auth->method('getTokenFromResponse')->willReturn('12345');

    $client->method('send')
      ->willReturnOnConsecutiveCalls(
        new Response(),
        $this->returnCallback(function() use ($error) {
          throw $error;
        })
      );

    $sf = SFAPIClient::connectWith($client, $auth);

    $this->assertEquals(SFCreationResult::err($error), $sf->create('testType', ['key' => 'value']));
  }

  public function testCreateConstructsOkFromObject() {
    list($auth, $client) = $this->fixtures();

    $body = '{"id": "12345", "success": true, "errors": []}';

    $auth->method('getTokenFromResponse')->willReturn('12345');

    $client->method('send')
      ->willReturnOnConsecutiveCalls(
        new Response(),
        new Response(200, [], $body)
      );

    $sf = SFAPIClient::connectWith($client, $auth);

    $this->assertEquals(
      SFCreationResult::ok(new SFCreation(json_decode($body))),
      $sf->create('testType', ['key' => 'value'])
    );
  }

  public function testCreateReturnsErrorForNonObject() {
    list($auth, $client) = $this->fixtures();

    $body = '[1, 2, 3, 4, 5]';

    $auth->method('getTokenFromResponse')->willReturn('12345');

    $client->method('send')
      ->willReturnOnConsecutiveCalls(
        new Response(),
        new Response(200, [], $body)
      );

    $sf = SFAPIClient::connectWith($client, $auth);

    $result = $sf->create('testType', ['key' => 'value']);

    $this->assertTrue($result->isError());
    $this->assertInstanceOf(\Exception::class, $result->getErr());
  }

  /**
   * GET
   */

  public function testGetHandlesErrorResult() {
    list($auth, $client) = $this->fixtures();

    $error = new RequestException(
      'Request failure',
      new Request('GET', '/'),
      new Response(503, [], '{"message": "server error"}')
    );

    $auth->method('getTokenFromResponse')->willReturn('12345');

    $client->method('send')
      ->willReturnOnConsecutiveCalls(
        new Response(),
        $this->returnCallback(function() use ($error) {
          throw $error;
        })
      );

    $sf = SFAPIClient::connectWith($client, $auth);

    $this->assertEquals(SFObjectResult::err($error), $sf->get('testType', '12345'));
  }

  public function testRetriesFailedGetRequests() {
    list($auth, $client) = $this->fixtures();

    $auth->method('getTokenFromResponse')->willReturn('12345');

    $status = SFAPIClient::RETRY_STATUSES[0];
    $error = new RequestException(
      'Request failure',
      new Request('GET', '/'),
      new Response($status, [], '{"message": "server error"}')
    );

    $errorCallback = $this->returnCallback(function () use ($error) {
      throw $error;
    });

    $client->method('send')
      ->willReturnOnConsecutiveCalls(
        new Response(),
        $errorCallback,
        $errorCallback,
        $errorCallback
      );

    $client->expects($this->exactly(4))
      ->method('send');

    $sf = SFAPIClient::connectWith($client, $auth);

    $sf->get('testType', '0');
  }

  public function testGet404ReturnsNulledOk() {
    list($auth, $client) = $this->fixtures();

    $error = new RequestException(
      'Request failure',
      new Request('GET', '/'),
      new Response(404)
    );

    $errorCallback = $this->returnCallback(function () use ($error) {
      throw $error;
    });

    $auth->method('getTokenFromResponse')->willReturn('12345');

    $client->method('send')
      ->willReturnOnConsecutiveCalls(
        new Response(),
        $errorCallback,
        $errorCallback,
        $errorCallback
      );

    $sf = SFAPIClient::connectWith($client, $auth);

    $this->assertEquals(SFObjectResult::ok(null), $sf->get('testType', '12345'));
  }

  public function testGetConstructsOkFromObject() {
    list($auth, $client) = $this->fixtures();

    $body = '{"key": "value"}';

    $auth->method('getTokenFromResponse')->willReturn('12345');

    $client->method('send')
      ->willReturnOnConsecutiveCalls(
        new Response(),
        new Response(200, [], $body)
      );

    $sf = SFAPIClient::connectWith($client, $auth);

    $this->assertEquals(
      SFObjectResult::ok(new SFObject(json_decode($body))),
      $sf->get('testType', '12345')
    );
  }

  public function testGetReturnsErrorForNonObject() {
    list($auth, $client) = $this->fixtures();

    $body = '[1, 2, 3, 4, 5]';

    $auth->method('getTokenFromResponse')->willReturn('12345');

    $client->method('send')
      ->willReturnOnConsecutiveCalls(
        new Response(),
        new Response(200, [], $body)
      );

    $sf = SFAPIClient::connectWith($client, $auth);

    $result = $sf->get('testType','12345');

    $this->assertTrue($result->isError());
    $this->assertInstanceOf(\Exception::class, $result->getErr());
  }


  public function testGetWithFields() {
    list($auth, $client) = $this->fixtures();
    $body = '{"key": "value", "key2": "value2"}';
    $auth->method('getTokenFromResponse')->willReturn('12345');
    $client->method('send')
           ->willReturnOnConsecutiveCalls(
             new Response(),
             new Response(200, [], $body)
           );
    $sf = SFAPIClient::connectWith($client, $auth);
    $sfResultObj = $sf->get('testType', '12345', ['key','value']);
    $this->assertEquals($sfResultObj->value()->key, 'value');
    $this->assertEquals($sfResultObj->value()->key2, 'value2');
  }

  /**
   * PATCH
   */

  public function testPatchHandlesErrorResult() {
    list($auth, $client) = $this->fixtures();

    $error = new RequestException(
      'Request failure',
      new Request('GET', '/'),
      new Response(500, [], '{"message": "server error"}')
    );

    $auth->method('getTokenFromResponse')->willReturn('12345');

    $client->method('send')
      ->willReturnOnConsecutiveCalls(
        new Response(),
        $this->returnCallback(function() use ($error) {
          throw $error;
        })
      );

    $sf = SFAPIClient::connectWith($client, $auth);

    $this->assertEquals(BoolResult::err($error), $sf->patch('testType', '12345', ['key' => 'value']));
  }

  public function testPatchConstructsOkFromNull() {
    list($auth, $client) = $this->fixtures();

    $auth->method('getTokenFromResponse')->willReturn('12345');

    $client->method('send')
      ->willReturnOnConsecutiveCalls(
        new Response(),
        new Response(200)
      );

    $sf = SFAPIClient::connectWith($client, $auth);

    $this->assertEquals(
      BoolResult::ok(true),
      $sf->patch('testType', '12345', ['key' => 'value'])
    );
  }

  public function testPatchReturnsFalseForNonNull() {
    list($auth, $client) = $this->fixtures();

    $body = '[1, 2, 3, 4, 5]';

    $auth->method('getTokenFromResponse')->willReturn('12345');

    $client->method('send')
      ->willReturnOnConsecutiveCalls(
        new Response(),
        new Response(200, [], $body)
      );

    $sf = SFAPIClient::connectWith($client, $auth);

    $this->assertEquals(
      BoolResult::ok(false),
      $sf->patch('testType', '12345', ['key' => 'value'])
    );
  }

  /**
   * DELETE
   */

  public function testDeleteHandlesErrorResult() {
    list($auth, $client) = $this->fixtures();

    $error = new RequestException(
      'Request failure',
      new Request('GET', '/'),
      new Response(500, [], '{"message": "server error"}')
    );

    $auth->method('getTokenFromResponse')->willReturn('12345');

    $client->method('send')
      ->willReturnOnConsecutiveCalls(
        new Response(),
        $this->returnCallback(function() use ($error) {
          throw $error;
        })
      );

    $sf = SFAPIClient::connectWith($client, $auth);

    $this->assertEquals(BoolResult::err($error), $sf->delete('testType', '12345'));
  }

  public function testDeleteConstructsOkFromNull() {
    list($auth, $client) = $this->fixtures();

    $auth->method('getTokenFromResponse')->willReturn('12345');

    $client->method('send')
      ->willReturnOnConsecutiveCalls(
        new Response(),
        new Response(200)
      );

    $sf = SFAPIClient::connectWith($client, $auth);

    $this->assertEquals(
      BoolResult::ok(true),
      $sf->delete('testType', '12345')
    );
  }

  public function testDeleteReturnsFalseForNonNull() {
    list($auth, $client) = $this->fixtures();

    $body = '[1, 2, 3, 4, 5]';

    $auth->method('getTokenFromResponse')->willReturn('12345');

    $client->method('send')
      ->willReturnOnConsecutiveCalls(
        new Response(),
        new Response(200, [], $body)
      );

    $sf = SFAPIClient::connectWith($client, $auth);

    $this->assertEquals(
      BoolResult::ok(false),
      $sf->delete('testType', '12345')
    );
  }

  /**
   * SEARCH
   */

  public function testConstructsQuery() {
    list($auth, $client) = $this->fixtures();

    $auth->method('getTokenFromResponse')->willReturn('12345');

    $client->expects($this->exactly(2))
      ->method('send')
      ->withConsecutive(
        [$this->callback(function() { return true; })],
        [$this->callback(function(Request $arg) {
          return $arg->getUri()->getQuery() === 'q=SELECT+Id+FROM+CONTACTS+LIMIT+1';
        })]
      )
      ->willReturnOnConsecutiveCalls(
        new Response(),
        new Response(200, [], '{"totalSize": 5, "done": false, "records": [{"Id": "12355"}]}')
      );

    $sf = SFAPIClient::connectWith($client, $auth);

    $sf->query('SELECT Id FROM CONTACTS LIMIT 1');
  }

  public function testQueryHandlesErrorResult() {
    list($auth, $client) = $this->fixtures();

    $error = new RequestException(
      'Request failure',
      new Request('GET', '/'),
      new Response(500, [], '{"message": "server error"}')
    );

    $auth->method('getTokenFromResponse')->willReturn('12345');

    $client->method('send')
      ->willReturnOnConsecutiveCalls(
        new Response(),
        $this->returnCallback(function() use ($error) {
          throw $error;
        })
      );

    $sf = SFAPIClient::connectWith($client, $auth);

    $this->assertEquals(SFRecordsResult::err($error), $sf->query('SELECT Id FROM CONTACTS LIMIT 1'));
  }

  public function testQueryConstructsOkFromObject() {
    list($auth, $client) = $this->fixtures();

    $body = '{"totalSize": 5, "done": false, "records": [{"Id": "12355"}]}';

    $auth->method('getTokenFromResponse')->willReturn('12345');

    $client->method('send')
      ->willReturnOnConsecutiveCalls(
        new Response(),
        new Response(200, [], $body)
      );

    $sf = SFAPIClient::connectWith($client, $auth);

    $this->assertEquals(
      SFRecordsResult::ok(new SFRecords(json_decode($body))),
      $sf->query('SELECT Id FROM CONTACTS LIMIT 1')
    );
  }

  public function testQueryReturnsErrorForNonObject() {
    list($auth, $client) = $this->fixtures();

    $body = '[1, 2, 3, 4, 5]';

    $auth->method('getTokenFromResponse')->willReturn('12345');

    $client->method('send')
      ->willReturnOnConsecutiveCalls(
        new Response(),
        new Response(200, [], $body)
      );

    $sf = SFAPIClient::connectWith($client, $auth);

    $result = $sf->query('SELECT Id FROM CONTACTS LIMIT 1');

    $this->assertTrue($result->isError());
    $this->assertInstanceOf(\Exception::class, $result->getErr());
  }

  public function testFullQueryFollowsPagination() {
    list($auth, $client) = $this->fixtures();

    $bodies = [
      '{"totalSize": 3, "done": false, "records": [{"Id": "123"}, {"Id": "456"}], "nextRecordsUrl": "/prefix/query/identifier"}',
      '{"totalSize": 3, "done": true, "records": [{"Id": "789"}]}'
    ];

    $sfObjects = [
      new SFObject(json_decode($bodies[0])->records[0]),
      new SFObject(json_decode($bodies[0])->records[1]),
      new SFObject(json_decode($bodies[1])->records[0])
    ];

    $auth->method('getTokenFromResponse')->willReturn('12345');

    $client->expects($this->exactly(3))
      ->method('send')
      ->willReturnOnConsecutiveCalls(
        new Response(),
        new Response(200, [], $bodies[0]),
        new Response(200, [], $bodies[1])
      );

    $sf = SFAPIClient::connectWith($client, $auth);

    $records = $sf->fullQuery('SELECT Id FROM CONTACTS LIMIT 3')->value();

    $this->assertEquals(3, count($records->getRecords()));
    $this->assertFalse($records->hasMore());
    $this->assertEquals($sfObjects, $records->getRecords());
  }

  public function testFullQueryShortCircuits() {
    list($auth, $client) = $this->fixtures();

    $bodies = [
      '{"totalSize": 3, "done": false, "records": [{"Id": "123"}], "nextRecordsUrl": "/prefix/query/identifier"}',
      'aopwgijawogpiawjegoawijegaw;oeigjawo;ijoigj3409gjagojsegaev', // Second response from the API failed for unknown reason
      '{"totalSize": 3, "done": true, "records": [{"Id": "789"}]}'
    ];

    $auth->method('getTokenFromResponse')->willReturn('12345');
    
    $client->expects($this->exactly(3))
      ->method('send')
      ->willReturnOnConsecutiveCalls(
        new Response(),
        new Response(200, [], $bodies[0]),
        new Response(200, [], $bodies[1]),
        new Response(200, [], $bodies[2])
      );

    $sf = SFAPIClient::connectWith($client, $auth);

    $result = $sf->fullQuery('SELECT Id FROM CONTACTS LIMIT 3');

    $this->assertTrue($result->isError());
    $this->assertInstanceOf(\Exception::class, $result->getErr());
  }
}