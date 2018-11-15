<?php

namespace SFClient;

use SFClient\Result\BoolResult;
use SFClient\Result\SFCreationResult;
use SFClient\Result\SFObjectResult;
use SFClient\SalesForce\SFAPIClient;

/**
 * Class Client
 * @package SFClient
 *
 * @method SFCreationResult createAccount(array $data)
 * @method SFObjectResult getAccount(string $id, array $fields = [])
 * @method BoolResult patchAccount(string $id, array $data)
 * @method BoolResult deleteAccount(string $id)
 * @method SFCreationResult createAccountContactRole(array $data)
 * @method SFObjectResult getAccountContactRole(string $id, array $fields = [])
 * @method BoolResult patchAccountContactRole(string $id, array $data)
 * @method BoolResult deleteAccountContactRole(string $id)
 * @method SFCreationResult createAsset(array $data)
 * @method SFObjectResult getAsset(string $id, array $fields = [])
 * @method BoolResult patchAsset(string $id, array $data)
 * @method BoolResult deleteAsset(string $id)
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
 * @method SFCreationResult createCaseComment(array $data)
 * @method SFObjectResult getCaseComment(string $id, array $fields = [])
 * @method BoolResult patchCaseComment(string $id, array $data)
 * @method BoolResult deleteCaseComment(string $id)
 * @method SFCreationResult createCaseContactRole(array $data)
 * @method SFObjectResult getCaseContactRole(string $id, array $fields = [])
 * @method BoolResult patchCaseContactRole(string $id, array $data)
 * @method BoolResult deleteCaseContactRole(string $id)
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
 * @method SFCreationResult createEvent(array $data)
 * @method SFObjectResult getEvent(string $id, array $fields = [])
 * @method BoolResult patchEvent(string $id, array $data)
 * @method BoolResult deleteEvent(string $id)
 * @method SFCreationResult createIdea(array $data)
 * @method SFObjectResult getIdea(string $id, array $fields = [])
 * @method BoolResult patchIdea(string $id, array $data)
 * @method BoolResult deleteIdea(string $id)
 * @method SFCreationResult createKnowledgeArticle(array $data)
 * @method SFObjectResult getKnowledgeArticle(string $id, array $fields = [])
 * @method BoolResult patchKnowledgeArticle(string $id, array $data)
 * @method BoolResult deleteKnowledgeArticle(string $id)
 * @method SFCreationResult createLead(array $data)
 * @method SFObjectResult getLead(string $id, array $fields = [])
 * @method BoolResult patchLead(string $id, array $data)
 * @method BoolResult deleteLead(string $id)
 * @method SFCreationResult createOpportunity(array $data)
 * @method SFObjectResult getOpportunity(string $id, array $fields = [])
 * @method BoolResult patchOpportunity(string $id, array $data)
 * @method BoolResult deleteOpportunity(string $id)
 * @method SFCreationResult createOpportunityContactRole(array $data)
 * @method SFObjectResult getOpportunityContactRole(string $id, array $fields = [])
 * @method BoolResult patchOpportunityContactRole(string $id, array $data)
 * @method BoolResult deleteOpportunityContactRole(string $id)
 * @method SFCreationResult createOpportunityLineItem(array $data)
 * @method SFObjectResult getOpportunityLineItem(string $id, array $fields = [])
 * @method BoolResult patchOpportunityLineItem(string $id, array $data)
 * @method BoolResult deleteOpportunityLineItem(string $id)
 * @method SFCreationResult createPartnerRole(array $data)
 * @method SFObjectResult getPartnerRole(string $id, array $fields = [])
 * @method BoolResult patchPartnerRole(string $id, array $data)
 * @method BoolResult deletePartnerRole(string $id)
 * @method SFCreationResult createProduct2(array $data)
 * @method SFObjectResult getProduct2(string $id, array $fields = [])
 * @method BoolResult patchProduct2(string $id, array $data)
 * @method BoolResult deleteProduct2(string $id)
 * @method SFCreationResult createQuestion(array $data)
 * @method SFObjectResult getQuestion(string $id, array $fields = [])
 * @method BoolResult patchQuestion(string $id, array $data)
 * @method BoolResult deleteQuestion(string $id)
 * @method SFCreationResult createQuote(array $data)
 * @method SFObjectResult getQuote(string $id, array $fields = [])
 * @method BoolResult patchQuote(string $id, array $data)
 * @method BoolResult deleteQuote(string $id)
 * @method SFCreationResult createQuoteLineItem(array $data)
 * @method SFObjectResult getQuoteLineItem(string $id, array $fields = [])
 * @method BoolResult patchQuoteLineItem(string $id, array $data)
 * @method BoolResult deleteQuoteLineItem(string $id)
 * @method SFCreationResult createReply(array $data)
 * @method SFObjectResult getReply(string $id, array $fields = [])
 * @method BoolResult patchReply(string $id, array $data)
 * @method BoolResult deleteReply(string $id)
 * @method SFCreationResult createSite(array $data)
 * @method SFObjectResult getSite(string $id, array $fields = [])
 * @method BoolResult patchSite(string $id, array $data)
 * @method BoolResult deleteSite(string $id)
 * @method SFCreationResult createSolution(array $data)
 * @method SFObjectResult getSolution(string $id, array $fields = [])
 * @method BoolResult patchSolution(string $id, array $data)
 * @method BoolResult deleteSolution(string $id)
 * @method SFCreationResult createTask(array $data)
 * @method SFObjectResult getTask(string $id, array $fields = [])
 * @method BoolResult patchTask(string $id, array $data)
 * @method BoolResult deleteTask(string $id)
 * @method SFCreationResult createTerritory(array $data)
 * @method SFObjectResult getTerritory(string $id, array $fields = [])
 * @method BoolResult patchTerritory(string $id, array $data)
 * @method BoolResult deleteTerritory(string $id)
 * @method SFCreationResult createUser(array $data)
 * @method SFObjectResult getUser(string $id, array $fields = [])
 * @method BoolResult patchUser(string $id, array $data)
 * @method BoolResult deleteUser(string $id)
 * @method SFCreationResult createUserLicense(array $data)
 * @method SFObjectResult getUserLicense(string $id, array $fields = [])
 * @method BoolResult patchUserLicense(string $id, array $data)
 * @method BoolResult deleteUserLicense(string $id)
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
   * Client constructor.
   * @param SFAPIClient $client
   */
  public function __construct(SFAPIClient $client) {
    $this->_client = $client;
    $this->_types = require __DIR__ . '/SalesForce/ObjectTypes.php';
  }

  /**
   * @param string $name
   * @param array $arguments
   */
  public function __call(string $name, array $arguments) {
    if ($parts = $this->getRESTParts($name)) {
      list($method, $type) = $parts;

      $this->_client->scope($type)->{$method}(...$arguments);
    }
  }

  /**
   * @param string $name
   * @return null|string
   */
  public function getRESTParts(string $name): ?array {
    $methods = ['get', 'patch', 'create', 'delete'];

    foreach ($methods as $_ => $method) {
      if (strpos($name, $method) === 0) {
        $type = str_replace($method, '', $name);

        if (in_array($type, $this->_types)) {
          return [$method, $type];
        }
      }
    }

    return null;
  }
}