## Table of contents

- [\SFClient\Client](#class-sfclientclient)
- [\SFClient\Element](#class-sfclientelement)
- [\SFClient\NPSPClient](#class-sfclientnpspclient)
- [\SFClient\Auth\Authentication (interface)](#interface-sfclientauthauthentication)
- [\SFClient\Auth\PasswordAuth](#class-sfclientauthpasswordauth)
- [\SFClient\Endpoint\Endpoint](#class-sfclientendpointendpoint)
- [\SFClient\Exceptions\FailedToAuthenticate](#class-sfclientexceptionsfailedtoauthenticate)
- [\SFClient\Result\BoolResult](#class-sfclientresultboolresult)
- [\SFClient\Result\Result](#class-sfclientresultresult)
- [\SFClient\Result\SFCreationResult](#class-sfclientresultsfcreationresult)
- [\SFClient\Result\SFObjectResult](#class-sfclientresultsfobjectresult)
- [\SFClient\Result\SFRecordsResult](#class-sfclientresultsfrecordsresult)
- [\SFClient\SalesForce\ScopedSFAPIClient](#class-sfclientsalesforcescopedsfapiclient)
- [\SFClient\SalesForce\SFAPIClient](#class-sfclientsalesforcesfapiclient)
- [\SFClient\SalesForce\SFCreation](#class-sfclientsalesforcesfcreation)
- [\SFClient\SalesForce\SFObject](#class-sfclientsalesforcesfobject)
- [\SFClient\SalesForce\SFRecords](#class-sfclientsalesforcesfrecords)

<hr />

### Class: \SFClient\Client

> Class Client

| Visibility | Function |
|:-----------|:---------|
| public | <strong>__call(</strong><em>\string</em> <strong>$name</strong>, <em>array</em> <strong>$arguments</strong>)</strong> : <em>void</em> |
| public | <strong>__construct(</strong><em>[\SFClient\SalesForce\SFAPIClient](#class-sfclientsalesforcesfapiclient)</em> <strong>$client</strong>)</strong> : <em>void</em><br /><em>Client constructor.</em> |
| public | <strong>getRESTParts(</strong><em>\string</em> <strong>$name</strong>)</strong> : <em>null/string</em> |
| public | <strong>search(</strong><em>\string</em> <strong>$query</strong>)</strong> : <em>[\SFClient\Result\SFRecordsResult](#class-sfclientresultsfrecordsresult)</em> |

<hr />

### Class: \SFClient\Element

> Class Element

| Visibility | Function |
|:-----------|:---------|
| public | <strong>__construct(</strong><em>[\stdClass](http://php.net/manual/en/class.stdclass.php)</em> <strong>$data</strong>)</strong> : <em>void</em><br /><em>Element constructor.</em> |
| public | <strong>__get(</strong><em>string</em> <strong>$name</strong>)</strong> : <em>mixed</em> |
| public | <strong>__isset(</strong><em>string</em> <strong>$name</strong>)</strong> : <em>bool</em> |
| protected | <strong>_wrap(</strong><em>mixed</em> <strong>$elem</strong>)</strong> : <em>mixed</em> |

<hr />

### Class: \SFClient\NPSPClient

> Class NPSPClient

| Visibility | Function |
|:-----------|:---------|
| public | <strong>__construct(</strong><em>[\SFClient\SalesForce\SFAPIClient](#class-sfclientsalesforcesfapiclient)</em> <strong>$client</strong>)</strong> : <em>void</em> |

*This class extends [\SFClient\Client](#class-sfclientclient)*

<hr />

### Interface: \SFClient\Auth\Authentication

| Visibility | Function |
|:-----------|:---------|
| public | <strong>getTokenFromResponse(</strong><em>\GuzzleHttp\Psr7\Response</em> <strong>$response</strong>)</strong> : <em>mixed</em> |
| public | <strong>getTokenRequest()</strong> : <em>mixed</em> |

<hr />

### Class: \SFClient\Auth\PasswordAuth

> Class PasswordAuth

| Visibility | Function |
|:-----------|:---------|
| public | <strong>__construct(</strong><em>\string</em> <strong>$key</strong>, <em>\string</em> <strong>$secret</strong>, <em>\string</em> <strong>$username</strong>, <em>\string</em> <strong>$password</strong>)</strong> : <em>void</em><br /><em>PasswordAuth constructor.</em> |
| public | <strong>getTokenFromResponse(</strong><em>\GuzzleHttp\Psr7\Response</em> <strong>$response</strong>)</strong> : <em>null/string</em> |
| public | <strong>getTokenRequest()</strong> : <em>\GuzzleHttp\Psr7\Request</em> |

*This class implements [\SFClient\Auth\Authentication](#interface-sfclientauthauthentication)*

<hr />

### Class: \SFClient\Endpoint\Endpoint

> Class Endpoint

| Visibility | Function |
|:-----------|:---------|
| public | <strong>__construct(</strong><em>\string</em> <strong>$baseUrl</strong>, <em>\string</em> <strong>$version</strong>)</strong> : <em>void</em><br /><em>Endpoint constructor.</em> |
| public | <strong>getUrl()</strong> : <em>string</em> |

<hr />

### Class: \SFClient\Exceptions\FailedToAuthenticate

| Visibility | Function |
|:-----------|:---------|

*This class extends \Exception*

*This class implements \Throwable*

<hr />

### Class: \SFClient\Result\BoolResult

> Class BoolResult

| Visibility | Function |
|:-----------|:---------|
| public | <strong>__construct(</strong><em>[\SFClient\Result\Result](#class-sfclientresultresult)</em> <strong>$res</strong>)</strong> : <em>void</em><br /><em>Bool constructor.</em> |
| public static | <strong>err(</strong><em>[\Exception](http://php.net/manual/en/class.exception.php)</em> <strong>$err</strong>)</strong> : <em>[\SFClient\Result\BoolResult](#class-sfclientresultboolresult)</em> |
| public | <strong>getErr()</strong> : <em>[\Exception](http://php.net/manual/en/class.exception.php)</em> |
| public | <strong>isError()</strong> : <em>bool</em> |
| public | <strong>isOk()</strong> : <em>bool</em> |
| public static | <strong>ok(</strong><em>bool/\boolean</em> <strong>$value</strong>)</strong> : <em>[\SFClient\Result\BoolResult](#class-sfclientresultboolresult)</em> |
| public | <strong>value()</strong> : <em>bool</em> |
| public | <strong>valueOr(</strong><em>mixed</em> <strong>$fallback</strong>)</strong> : <em>mixed</em> |

<hr />

### Class: \SFClient\Result\Result

> Class Result

| Visibility | Function |
|:-----------|:---------|
| public static | <strong>err(</strong><em>[\Exception](http://php.net/manual/en/class.exception.php)</em> <strong>$err</strong>)</strong> : <em>[\SFClient\Result\Result](#class-sfclientresultresult)</em> |
| public | <strong>getErr()</strong> : <em>[\Exception](http://php.net/manual/en/class.exception.php)/null</em> |
| public | <strong>isError()</strong> : <em>bool</em> |
| public | <strong>isOk()</strong> : <em>bool</em> |
| public static | <strong>ok(</strong><em>mixed</em> <strong>$value</strong>)</strong> : <em>[\SFClient\Result\Result](#class-sfclientresultresult)</em> |
| public | <strong>value()</strong> : <em>mixed</em> |
| public | <strong>valueOr(</strong><em>mixed</em> <strong>$fallback</strong>)</strong> : <em>mixed</em> |

<hr />

### Class: \SFClient\Result\SFCreationResult

> Class SFCreationResult

| Visibility | Function |
|:-----------|:---------|
| public | <strong>__construct(</strong><em>[\SFClient\Result\Result](#class-sfclientresultresult)</em> <strong>$res</strong>)</strong> : <em>void</em><br /><em>SFCreation constructor.</em> |
| public static | <strong>err(</strong><em>[\Exception](http://php.net/manual/en/class.exception.php)</em> <strong>$err</strong>)</strong> : <em>[\SFClient\Result\SFCreationResult](#class-sfclientresultsfcreationresult)</em> |
| public | <strong>getErr()</strong> : <em>[\Exception](http://php.net/manual/en/class.exception.php)</em> |
| public | <strong>isError()</strong> : <em>bool</em> |
| public | <strong>isOk()</strong> : <em>bool</em> |
| public static | <strong>ok(</strong><em>[\SFClient\SalesForce\SFCreation](#class-sfclientsalesforcesfcreation)</em> <strong>$value</strong>)</strong> : <em>[\SFClient\Result\SFCreationResult](#class-sfclientresultsfcreationresult)</em> |
| public | <strong>value()</strong> : <em>[\SFClient\SalesForce\SFCreation](#class-sfclientsalesforcesfcreation)</em> |
| public | <strong>valueOr(</strong><em>mixed</em> <strong>$fallback</strong>)</strong> : <em>mixed</em> |

<hr />

### Class: \SFClient\Result\SFObjectResult

> Class SFObjectResult

| Visibility | Function |
|:-----------|:---------|
| public | <strong>__construct(</strong><em>[\SFClient\Result\Result](#class-sfclientresultresult)</em> <strong>$res</strong>)</strong> : <em>void</em><br /><em>SFObject constructor.</em> |
| public static | <strong>err(</strong><em>[\Exception](http://php.net/manual/en/class.exception.php)</em> <strong>$err</strong>)</strong> : <em>[\SFClient\Result\SFObjectResult](#class-sfclientresultsfobjectresult)</em> |
| public | <strong>getErr()</strong> : <em>[\Exception](http://php.net/manual/en/class.exception.php)</em> |
| public | <strong>isError()</strong> : <em>bool</em> |
| public | <strong>isOk()</strong> : <em>bool</em> |
| public static | <strong>ok(</strong><em>\SFClient\Result\SFObject/null/[\SFClient\SalesForce\SFObject](#class-sfclientsalesforcesfobject)</em> <strong>$value</strong>)</strong> : <em>[\SFClient\Result\SFObjectResult](#class-sfclientresultsfobjectresult)</em> |
| public | <strong>value()</strong> : <em>\SFClient\Result\SFObject/null</em> |
| public | <strong>valueOr(</strong><em>mixed</em> <strong>$fallback</strong>)</strong> : <em>mixed</em> |

<hr />

### Class: \SFClient\Result\SFRecordsResult

> Class SFRecordsResult

| Visibility | Function |
|:-----------|:---------|
| public | <strong>__construct(</strong><em>[\SFClient\Result\Result](#class-sfclientresultresult)</em> <strong>$res</strong>)</strong> : <em>void</em><br /><em>SFRecords constructor.</em> |
| public static | <strong>err(</strong><em>[\Exception](http://php.net/manual/en/class.exception.php)</em> <strong>$err</strong>)</strong> : <em>[\SFClient\Result\SFRecordsResult](#class-sfclientresultsfrecordsresult)</em> |
| public | <strong>getErr()</strong> : <em>[\Exception](http://php.net/manual/en/class.exception.php)</em> |
| public | <strong>isError()</strong> : <em>bool</em> |
| public | <strong>isOk()</strong> : <em>bool</em> |
| public static | <strong>ok(</strong><em>[\SFClient\SalesForce\SFRecords](#class-sfclientsalesforcesfrecords)</em> <strong>$value</strong>)</strong> : <em>[\SFClient\Result\SFRecordsResult](#class-sfclientresultsfrecordsresult)</em> |
| public | <strong>value()</strong> : <em>[\SFClient\SalesForce\SFRecords](#class-sfclientsalesforcesfrecords)</em> |
| public | <strong>valueOr(</strong><em>mixed</em> <strong>$fallback</strong>)</strong> : <em>mixed</em> |

<hr />

### Class: \SFClient\SalesForce\ScopedSFAPIClient

> Class ScopedSFClient

| Visibility | Function |
|:-----------|:---------|
| public | <strong>__construct(</strong><em>\SFClient\SalesForce\Client/[\SFClient\SalesForce\SFAPIClient](#class-sfclientsalesforcesfapiclient)</em> <strong>$client</strong>, <em>\string</em> <strong>$objectScope</strong>)</strong> : <em>void</em><br /><em>ScopedSFClient constructor.</em> |
| public | <strong>create(</strong><em>array</em> <strong>$data</strong>)</strong> : <em>[\SFClient\Result\SFCreationResult](#class-sfclientresultsfcreationresult)</em> |
| public | <strong>delete(</strong><em>\string</em> <strong>$id</strong>)</strong> : <em>[\SFClient\Result\BoolResult](#class-sfclientresultboolresult)</em> |
| public | <strong>get(</strong><em>\string</em> <strong>$id</strong>, <em>array</em> <strong>$fields=array()</strong>)</strong> : <em>[\SFClient\Result\SFObjectResult](#class-sfclientresultsfobjectresult)</em> |
| public | <strong>getScope()</strong> : <em>string</em> |
| public | <strong>patch(</strong><em>\string</em> <strong>$id</strong>, <em>array</em> <strong>$data</strong>)</strong> : <em>[\SFClient\Result\BoolResult](#class-sfclientresultboolresult)</em> |

<hr />

### Class: \SFClient\SalesForce\SFAPIClient

> Class SFClient

| Visibility | Function |
|:-----------|:---------|
| public | <strong>authenticatedRequest(</strong><em>\GuzzleHttp\Psr7\Request</em> <strong>$request</strong>)</strong> : <em>\GuzzleHttp\Psr7\Request</em> |
| public static | <strong>connect(</strong><em>[\SFClient\Endpoint\Endpoint](#class-sfclientendpointendpoint)</em> <strong>$endpoint</strong>, <em>[\SFClient\Auth\Authentication](#interface-sfclientauthauthentication)</em> <strong>$auth</strong>)</strong> : <em>[\SFClient\SalesForce\SFAPIClient](#class-sfclientsalesforcesfapiclient)</em> |
| public static | <strong>connectWith(</strong><em>\GuzzleHttp\Client</em> <strong>$client</strong>, <em>[\SFClient\Auth\Authentication](#interface-sfclientauthauthentication)</em> <strong>$auth</strong>)</strong> : <em>[\SFClient\SalesForce\SFAPIClient](#class-sfclientsalesforcesfapiclient)</em> |
| public | <strong>create(</strong><em>\string</em> <strong>$objectType</strong>, <em>array</em> <strong>$data</strong>)</strong> : <em>[\SFClient\Result\SFCreationResult](#class-sfclientresultsfcreationresult)</em> |
| public | <strong>delete(</strong><em>\string</em> <strong>$objectType</strong>, <em>\string</em> <strong>$id</strong>)</strong> : <em>[\SFClient\Result\BoolResult](#class-sfclientresultboolresult)</em> |
| public | <strong>get(</strong><em>\string</em> <strong>$objectType</strong>, <em>\string</em> <strong>$id</strong>, <em>array</em> <strong>$fields=array()</strong>)</strong> : <em>[\SFClient\Result\SFObjectResult](#class-sfclientresultsfobjectresult)</em> |
| public | <strong>o(</strong><em>\string</em> <strong>$objectType</strong>, <em>\string</em> <strong>$id=`''`</strong>)</strong> : <em>string</em> |
| public | <strong>patch(</strong><em>\string</em> <strong>$objectType</strong>, <em>\string</em> <strong>$id</strong>, <em>array</em> <strong>$data</strong>)</strong> : <em>[\SFClient\Result\BoolResult](#class-sfclientresultboolresult)</em> |
| public | <strong>query(</strong><em>\string</em> <strong>$query</strong>)</strong> : <em>[\SFClient\Result\SFRecordsResult](#class-sfclientresultsfrecordsresult)</em> |
| public | <strong>run(</strong><em>\GuzzleHttp\Psr7\Request</em> <strong>$request</strong>)</strong> : <em>[\SFClient\Result\Result](#class-sfclientresultresult)</em> |
| public | <strong>scope(</strong><em>\string</em> <strong>$objectType</strong>)</strong> : <em>[\SFClient\SalesForce\ScopedSFAPIClient](#class-sfclientsalesforcescopedsfapiclient)</em> |
| protected | <strong>_send(</strong><em>\GuzzleHttp\Psr7\Request</em> <strong>$request</strong>)</strong> : <em>mixed</em> |

<hr />

### Class: \SFClient\SalesForce\SFCreation

> Class SFCreation

| Visibility | Function |
|:-----------|:---------|
| public | <strong>__construct(</strong><em>[\stdClass](http://php.net/manual/en/class.stdclass.php)</em> <strong>$data</strong>)</strong> : <em>void</em> |
| public | <strong>getErrors()</strong> : <em>array</em> |
| public | <strong>getId()</strong> : <em>string</em> |
| public | <strong>wasSuccessful()</strong> : <em>bool</em> |

<hr />

### Class: \SFClient\SalesForce\SFObject

> Class SFObject

| Visibility | Function |
|:-----------|:---------|

*This class extends [\SFClient\Element](#class-sfclientelement)*

<hr />

### Class: \SFClient\SalesForce\SFRecords

> Class SFRecords

| Visibility | Function |
|:-----------|:---------|
| public | <strong>__construct(</strong><em>[\stdClass](http://php.net/manual/en/class.stdclass.php)</em> <strong>$data</strong>)</strong> : <em>void</em><br /><em>SFRecords constructor.</em> |
| public | <strong>getRecords()</strong> : <em>[\SFClient\SalesForce\SFObject](#class-sfclientsalesforcesfobject)[]</em> |
| public | <strong>getTotal()</strong> : <em>int</em> |
| public | <strong>hasMore()</strong> : <em>bool</em> |

