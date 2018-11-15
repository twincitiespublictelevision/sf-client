<?php

namespace SFClient;

use SFClient\Result\BoolResult;
use SFClient\Result\SFCreationResult;
use SFClient\Result\SFObjectResult;
use SFClient\Result\SFRecordsResult;
use SFClient\SalesForce\SFAPIClient;

/**
 * Class Client
 *
 * Client for interacting with the SalesForce objects. This client is a small
 * wrapper around an underlying SalesForce API Client. Its purpose is to allow
 * for direct access to objects as opposed to general CRUD methods. By design
 * only base SalesForce objects are supporting by this client.
 *
 * ```php
 * $client = new Client(SFAPIClient::connect($endpoint, $auth));
 * ```
 *
 * @package SFClient
 *
 * @method SFCreationResult createAccount(array $data)
 * @method SFObjectResult getAccount(string $id, array $fields = [])
 * @method BoolResult patchAccount(string $id, array $data)
 * @method BoolResult deleteAccount(string $id)
 * @method SFCreationResult createActivity(array $data)
 * @method SFObjectResult getActivity(string $id, array $fields = [])
 * @method BoolResult patchActivity(string $id, array $data)
 * @method BoolResult deleteActivity(string $id)
 * @method SFCreationResult createAsset(array $data)
 * @method SFObjectResult getAsset(string $id, array $fields = [])
 * @method BoolResult patchAsset(string $id, array $data)
 * @method BoolResult deleteAsset(string $id)
 * @method SFCreationResult createAssetRelationship(array $data)
 * @method SFObjectResult getAssetRelationship(string $id, array $fields = [])
 * @method BoolResult patchAssetRelationship(string $id, array $data)
 * @method BoolResult deleteAssetRelationship(string $id)
 * @method SFCreationResult createCampaign(array $data)
 * @method SFObjectResult getCampaign(string $id, array $fields = [])
 * @method BoolResult patchCampaign(string $id, array $data)
 * @method BoolResult deleteCampaign(string $id)
 * @method SFCreationResult createCampaignMember(array $data)
 * @method SFObjectResult getCampaignMember(string $id, array $fields = [])
 * @method BoolResult patchCampaignMember(string $id, array $data)
 * @method BoolResult deleteCampaignMember(string $id)
 * @method SFCreationResult createCase(array $data)
 * @method SFObjectResult getCase(string $id, array $fields = [])
 * @method BoolResult patchCase(string $id, array $data)
 * @method BoolResult deleteCase(string $id)
 * @method SFCreationResult createContact(array $data)
 * @method SFObjectResult getContact(string $id, array $fields = [])
 * @method BoolResult patchContact(string $id, array $data)
 * @method BoolResult deleteContact(string $id)
 * @method SFCreationResult createContentVersion(array $data)
 * @method SFObjectResult getContentVersion(string $id, array $fields = [])
 * @method BoolResult patchContentVersion(string $id, array $data)
 * @method BoolResult deleteContentVersion(string $id)
 * @method SFCreationResult createContract(array $data)
 * @method SFObjectResult getContract(string $id, array $fields = [])
 * @method BoolResult patchContract(string $id, array $data)
 * @method BoolResult deleteContract(string $id)
 * @method SFCreationResult createContractContactRole(array $data)
 * @method SFObjectResult getContractContactRole(string $id, array $fields = [])
 * @method BoolResult patchContractContactRole(string $id, array $data)
 * @method BoolResult deleteContractContactRole(string $id)
 * @method SFCreationResult createDuplicateRecordItem(array $data)
 * @method SFObjectResult getDuplicateRecordItem(string $id, array $fields = [])
 * @method BoolResult patchDuplicateRecordItem(string $id, array $data)
 * @method BoolResult deleteDuplicateRecordItem(string $id)
 * @method SFCreationResult createDuplicateRecordSet(array $data)
 * @method SFObjectResult getDuplicateRecordSet(string $id, array $fields = [])
 * @method BoolResult patchDuplicateRecordSet(string $id, array $data)
 * @method BoolResult deleteDuplicateRecordSet(string $id)
 * @method SFCreationResult createEmailMessage(array $data)
 * @method SFObjectResult getEmailMessage(string $id, array $fields = [])
 * @method BoolResult patchEmailMessage(string $id, array $data)
 * @method BoolResult deleteEmailMessage(string $id)
 * @method SFCreationResult createEvent(array $data)
 * @method SFObjectResult getEvent(string $id, array $fields = [])
 * @method BoolResult patchEvent(string $id, array $data)
 * @method BoolResult deleteEvent(string $id)
 * @method SFCreationResult createLead(array $data)
 * @method SFObjectResult getLead(string $id, array $fields = [])
 * @method BoolResult patchLead(string $id, array $data)
 * @method BoolResult deleteLead(string $id)
 * @method SFCreationResult createMacro(array $data)
 * @method SFObjectResult getMacro(string $id, array $fields = [])
 * @method BoolResult patchMacro(string $id, array $data)
 * @method BoolResult deleteMacro(string $id)
 * @method SFCreationResult createOpportunity(array $data)
 * @method SFObjectResult getOpportunity(string $id, array $fields = [])
 * @method BoolResult patchOpportunity(string $id, array $data)
 * @method BoolResult deleteOpportunity(string $id)
 * @method SFCreationResult createOpportunityLineItem(array $data)
 * @method SFObjectResult getOpportunityLineItem(string $id, array $fields = [])
 * @method BoolResult patchOpportunityLineItem(string $id, array $data)
 * @method BoolResult deleteOpportunityLineItem(string $id)
 * @method SFCreationResult createOrder(array $data)
 * @method SFObjectResult getOrder(string $id, array $fields = [])
 * @method BoolResult patchOrder(string $id, array $data)
 * @method BoolResult deleteOrder(string $id)
 * @method SFCreationResult createOrderItem(array $data)
 * @method SFObjectResult getOrderItem(string $id, array $fields = [])
 * @method BoolResult patchOrderItem(string $id, array $data)
 * @method BoolResult deleteOrderItem(string $id)
 * @method SFCreationResult createPricebook2(array $data)
 * @method SFObjectResult getPricebook2(string $id, array $fields = [])
 * @method BoolResult patchPricebook2(string $id, array $data)
 * @method BoolResult deletePricebook2(string $id)
 * @method SFCreationResult createPricebookEntry(array $data)
 * @method SFObjectResult getPricebookEntry(string $id, array $fields = [])
 * @method BoolResult patchPricebookEntry(string $id, array $data)
 * @method BoolResult deletePricebookEntry(string $id)
 * @method SFCreationResult createQuickText(array $data)
 * @method SFObjectResult getQuickText(string $id, array $fields = [])
 * @method BoolResult patchQuickText(string $id, array $data)
 * @method BoolResult deleteQuickText(string $id)
 * @method SFCreationResult createScorecard(array $data)
 * @method SFObjectResult getScorecard(string $id, array $fields = [])
 * @method BoolResult patchScorecard(string $id, array $data)
 * @method BoolResult deleteScorecard(string $id)
 * @method SFCreationResult createScorecardAssociation(array $data)
 * @method SFObjectResult getScorecardAssociation(string $id, array $fields = [])
 * @method BoolResult patchScorecardAssociation(string $id, array $data)
 * @method BoolResult deleteScorecardAssociation(string $id)
 * @method SFCreationResult createScorecardMetric(array $data)
 * @method SFObjectResult getScorecardMetric(string $id, array $fields = [])
 * @method BoolResult patchScorecardMetric(string $id, array $data)
 * @method BoolResult deleteScorecardMetric(string $id)
 * @method SFCreationResult createSignupRequest(array $data)
 * @method SFObjectResult getSignupRequest(string $id, array $fields = [])
 * @method BoolResult patchSignupRequest(string $id, array $data)
 * @method BoolResult deleteSignupRequest(string $id)
 * @method SFCreationResult createSocialPersona(array $data)
 * @method SFObjectResult getSocialPersona(string $id, array $fields = [])
 * @method BoolResult patchSocialPersona(string $id, array $data)
 * @method BoolResult deleteSocialPersona(string $id)
 * @method SFCreationResult createSocialPost(array $data)
 * @method SFObjectResult getSocialPost(string $id, array $fields = [])
 * @method BoolResult patchSocialPost(string $id, array $data)
 * @method BoolResult deleteSocialPost(string $id)
 * @method SFCreationResult createTask(array $data)
 * @method SFObjectResult getTask(string $id, array $fields = [])
 * @method BoolResult patchTask(string $id, array $data)
 * @method BoolResult deleteTask(string $id)
 * @method SFCreationResult createUser(array $data)
 * @method SFObjectResult getUser(string $id, array $fields = [])
 * @method BoolResult patchUser(string $id, array $data)
 * @method BoolResult deleteUser(string $id)
 * @method SFCreationResult createUserProvisioningRequest(array $data)
 * @method SFObjectResult getUserProvisioningRequest(string $id, array $fields = [])
 * @method BoolResult patchUserProvisioningRequest(string $id, array $data)
 * @method BoolResult deleteUserProvisioningRequest(string $id)
 */
class Client {

  /**
   * @var SFAPIClient
   */
  protected $_client;

  /**
   * @var array
   */
  protected $_types;

  /**
   * @var array
   */
  protected $_typeNames;

  /**
   * Client constructor.
   * @param SFAPIClient $client
   * @internal
   */
  public function __construct(SFAPIClient $client) {
    $this->_client = $client;
    $this->_types = require __DIR__ . '/SalesForce/ObjectTypes.php';
    $this->_typeNames = array_keys($this->_types);
  }

  /**
   * @param string $query
   * @return SFRecordsResult
   */
  public function search(string $query): SFRecordsResult {
    return $this->_client->query($query);
  }

  /**
   * @param string $name
   * @param array $arguments
   * @internal
   */
  public function __call(string $name, array $arguments) {
    if ($parts = $this->getRESTParts($name)) {
      list($method, $type) = $parts;

      $this->_client->scope($this->_types[$type])->{$method}(...$arguments);
    }
  }

  /**
   * @param string $name
   * @return null|string
   * @internal
   */
  public function getRESTParts(string $name): ?array {
    $methods = ['get', 'patch', 'create', 'delete'];

    foreach ($methods as $_ => $method) {
      if (strpos($name, $method) === 0) {
        $type = str_replace($method, '', $name);

        if (in_array($type, $this->_typeNames)) {
          return [$method, $type];
        }
      }
    }

    return null;
  }
}