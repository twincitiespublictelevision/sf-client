<?php

namespace SFClient;

use SFClient\Result\BoolResult;
use SFClient\Result\SFCreationResult;
use SFClient\Result\SFObjectResult;
use SFClient\SalesForce\SFAPIClient;

/**
 * Class NPSPClient
 *
 * Client for interacting with the Nonprofit Success Pack package. This client
 * extends the functionality of the base SalesForce client by adding CRUD
 * support for the custom objects that are supplied by the NPSP package.
 *
 * ```php
 * $client = new NPSPClient(SFAPIClient::connect($endpoint, $auth));
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
 * @method SFCreationResult createAddress(array $data)
 * @method SFObjectResult getAddress(string $id, array $fields = [])
 * @method BoolResult patchAddress(string $id, array $data)
 * @method BoolResult deleteAddress(string $id)
 * @method SFCreationResult createAffiliation(array $data)
 * @method SFObjectResult getAffiliation(string $id, array $fields = [])
 * @method BoolResult patchAffiliation(string $id, array $data)
 * @method BoolResult deleteAffiliation(string $id)
 * @method SFCreationResult createAllocation(array $data)
 * @method SFObjectResult getAllocation(string $id, array $fields = [])
 * @method BoolResult patchAllocation(string $id, array $data)
 * @method BoolResult deleteAllocation(string $id)
 * @method SFCreationResult createAsset(array $data)
 * @method SFObjectResult getAsset(string $id, array $fields = [])
 * @method BoolResult patchAsset(string $id, array $data)
 * @method BoolResult deleteAsset(string $id)
 * @method SFCreationResult createAssetRelationship(array $data)
 * @method SFObjectResult getAssetRelationship(string $id, array $fields = [])
 * @method BoolResult patchAssetRelationship(string $id, array $data)
 * @method BoolResult deleteAssetRelationship(string $id)
 * @method SFCreationResult createBatch(array $data)
 * @method SFObjectResult getBatch(string $id, array $fields = [])
 * @method BoolResult patchBatch(string $id, array $data)
 * @method BoolResult deleteBatch(string $id)
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
 * @method SFCreationResult createDataImport(array $data)
 * @method SFObjectResult getDataImport(string $id, array $fields = [])
 * @method BoolResult patchDataImport(string $id, array $data)
 * @method BoolResult deleteDataImport(string $id)
 * @method SFCreationResult createDataImportBatch(array $data)
 * @method SFObjectResult getDataImportBatch(string $id, array $fields = [])
 * @method BoolResult patchDataImportBatch(string $id, array $data)
 * @method BoolResult deleteDataImportBatch(string $id)
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
 * @method SFCreationResult createEngagementPlan(array $data)
 * @method SFObjectResult getEngagementPlan(string $id, array $fields = [])
 * @method BoolResult patchEngagementPlan(string $id, array $data)
 * @method BoolResult deleteEngagementPlan(string $id)
 * @method SFCreationResult createEngagementPlanTask(array $data)
 * @method SFObjectResult getEngagementPlanTask(string $id, array $fields = [])
 * @method BoolResult patchEngagementPlanTask(string $id, array $data)
 * @method BoolResult deleteEngagementPlanTask(string $id)
 * @method SFCreationResult createEngagementPlanTemplate(array $data)
 * @method SFObjectResult getEngagementPlanTemplate(string $id, array $fields = [])
 * @method BoolResult patchEngagementPlanTemplate(string $id, array $data)
 * @method BoolResult deleteEngagementPlanTemplate(string $id)
 * @method SFCreationResult createError(array $data)
 * @method SFObjectResult getError(string $id, array $fields = [])
 * @method BoolResult patchError(string $id, array $data)
 * @method BoolResult deleteError(string $id)
 * @method SFCreationResult createEvent(array $data)
 * @method SFObjectResult getEvent(string $id, array $fields = [])
 * @method BoolResult patchEvent(string $id, array $data)
 * @method BoolResult deleteEvent(string $id)
 * @method SFCreationResult createGeneralAccountingUnit(array $data)
 * @method SFObjectResult getGeneralAccountingUnit(string $id, array $fields = [])
 * @method BoolResult patchGeneralAccountingUnit(string $id, array $data)
 * @method BoolResult deleteGeneralAccountingUnit(string $id)
 * @method SFCreationResult createGrantDeadline(array $data)
 * @method SFObjectResult getGrantDeadline(string $id, array $fields = [])
 * @method BoolResult patchGrantDeadline(string $id, array $data)
 * @method BoolResult deleteGrantDeadline(string $id)
 * @method SFCreationResult createHousehold(array $data)
 * @method SFObjectResult getHousehold(string $id, array $fields = [])
 * @method BoolResult patchHousehold(string $id, array $data)
 * @method BoolResult deleteHousehold(string $id)
 * @method SFCreationResult createLead(array $data)
 * @method SFObjectResult getLead(string $id, array $fields = [])
 * @method BoolResult patchLead(string $id, array $data)
 * @method BoolResult deleteLead(string $id)
 * @method SFCreationResult createLevel(array $data)
 * @method SFObjectResult getLevel(string $id, array $fields = [])
 * @method BoolResult patchLevel(string $id, array $data)
 * @method BoolResult deleteLevel(string $id)
 * @method SFCreationResult createMacro(array $data)
 * @method SFObjectResult getMacro(string $id, array $fields = [])
 * @method BoolResult patchMacro(string $id, array $data)
 * @method BoolResult deleteMacro(string $id)
 * @method SFCreationResult createOppPayment(array $data)
 * @method SFObjectResult getOppPayment(string $id, array $fields = [])
 * @method BoolResult patchOppPayment(string $id, array $data)
 * @method BoolResult deleteOppPayment(string $id)
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
 * @method SFCreationResult createPartialSoftCredit(array $data)
 * @method SFObjectResult getPartialSoftCredit(string $id, array $fields = [])
 * @method BoolResult patchPartialSoftCredit(string $id, array $data)
 * @method BoolResult deletePartialSoftCredit(string $id)
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
 * @method SFCreationResult createRecurringDonation(array $data)
 * @method SFObjectResult getRecurringDonation(string $id, array $fields = [])
 * @method BoolResult patchRecurringDonation(string $id, array $data)
 * @method BoolResult deleteRecurringDonation(string $id)
 * @method SFCreationResult createRelationship(array $data)
 * @method SFObjectResult getRelationship(string $id, array $fields = [])
 * @method BoolResult patchRelationship(string $id, array $data)
 * @method BoolResult deleteRelationship(string $id)
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
 * @method SFCreationResult createTriggerHandler(array $data)
 * @method SFObjectResult getTriggerHandler(string $id, array $fields = [])
 * @method BoolResult patchTriggerHandler(string $id, array $data)
 * @method BoolResult deleteTriggerHandler(string $id)
 * @method SFCreationResult createUser(array $data)
 * @method SFObjectResult getUser(string $id, array $fields = [])
 * @method BoolResult patchUser(string $id, array $data)
 * @method BoolResult deleteUser(string $id)
 * @method SFCreationResult createUserProvisioningRequest(array $data)
 * @method SFObjectResult getUserProvisioningRequest(string $id, array $fields = [])
 * @method BoolResult patchUserProvisioningRequest(string $id, array $data)
 * @method BoolResult deleteUserProvisioningRequest(string $id)
 */
class NPSPClient extends Client {

  /**
   * NPSPClient constructor.
   * @param SFAPIClient $client
   */
  public function __construct(SFAPIClient $client) {
    parent::__construct($client);
    $types = require __DIR__ . DS . 'SalesForce' . DS . 'ObjectTypes.php';
    $npspTypes = require __DIR__ . DS . 'SalesForce' . DS . 'NPSPObjectTypes.php';

    $this->_types = array_merge($types, $npspTypes);
    $this->_typeNames = array_keys($this->_types);
  }
}