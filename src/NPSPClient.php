<?php

namespace SFClient;

use SFClient\Result\BoolResult;
use SFClient\Result\SFCreationResult;
use SFClient\Result\SFObjectResult;
use SFClient\SalesForce\SFAPIClient;

/**
 * Class NPSPClient
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
 * @method SFCreationResult createAddress(array $data)
 * @method SFObjectResult getAddress(string $id, array $fields = [])
 * @method BoolResult patchAddress(string $id, array $data)
 * @method BoolResult deleteAddress(string $id)
 * @method SFCreationResult createAffiliation(array $data)
 * @method SFObjectResult getAffiliation(string $id, array $fields = [])
 * @method BoolResult patchAffiliation(string $id, array $data)
 * @method BoolResult deleteAffiliation(string $id)
 * @method SFCreationResult createAsset(array $data)
 * @method SFObjectResult getAsset(string $id, array $fields = [])
 * @method BoolResult patchAsset(string $id, array $data)
 * @method BoolResult deleteAsset(string $id)
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
 * @method SFCreationResult createDeliverable(array $data)
 * @method SFObjectResult getDeliverable(string $id, array $fields = [])
 * @method BoolResult patchDeliverable(string $id, array $data)
 * @method BoolResult deleteDeliverable(string $id)
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
 * @method SFCreationResult createGAUAllocation(array $data)
 * @method SFObjectResult getGAUAllocation(string $id, array $fields = [])
 * @method BoolResult patchGAUAllocation(string $id, array $data)
 * @method BoolResult deleteGAUAllocation(string $id)
 * @method SFCreationResult createGeneralAccountingUnit(array $data)
 * @method SFObjectResult getGeneralAccountingUnit(string $id, array $fields = [])
 * @method BoolResult patchGeneralAccountingUnit(string $id, array $data)
 * @method BoolResult deleteGeneralAccountingUnit(string $id)
 * @method SFCreationResult createHousehold(array $data)
 * @method SFObjectResult getHousehold(string $id, array $fields = [])
 * @method BoolResult patchHousehold(string $id, array $data)
 * @method BoolResult deleteHousehold(string $id)
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
 * @method SFCreationResult createLevel(array $data)
 * @method SFObjectResult getLevel(string $id, array $fields = [])
 * @method BoolResult patchLevel(string $id, array $data)
 * @method BoolResult deleteLevel(string $id)
 * @method SFCreationResult createNPSPDataImport(array $data)
 * @method SFObjectResult getNPSPDataImport(string $id, array $fields = [])
 * @method BoolResult patchNPSPDataImport(string $id, array $data)
 * @method BoolResult deleteNPSPDataImport(string $id)
 * @method SFCreationResult createNPSPDataImportBatch(array $data)
 * @method SFObjectResult getNPSPDataImportBatch(string $id, array $fields = [])
 * @method BoolResult patchNPSPDataImportBatch(string $id, array $data)
 * @method BoolResult deleteNPSPDataImportBatch(string $id)
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
 * @method SFCreationResult createPartialSoftCredit(array $data)
 * @method SFObjectResult getPartialSoftCredit(string $id, array $fields = [])
 * @method BoolResult patchPartialSoftCredit(string $id, array $data)
 * @method BoolResult deletePartialSoftCredit(string $id)
 * @method SFCreationResult createPartnerRole(array $data)
 * @method SFObjectResult getPartnerRole(string $id, array $fields = [])
 * @method BoolResult patchPartnerRole(string $id, array $data)
 * @method BoolResult deletePartnerRole(string $id)
 * @method SFCreationResult createPayment(array $data)
 * @method SFObjectResult getPayment(string $id, array $fields = [])
 * @method BoolResult patchPayment(string $id, array $data)
 * @method BoolResult deletePayment(string $id)
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
 * @method SFCreationResult createRecurringDonations(array $data)
 * @method SFObjectResult getRecurringDonations(string $id, array $fields = [])
 * @method BoolResult patchRecurringDonations(string $id, array $data)
 * @method BoolResult deleteRecurringDonations(string $id)
 * @method SFCreationResult createRelationship(array $data)
 * @method SFObjectResult getRelationship(string $id, array $fields = [])
 * @method BoolResult patchRelationship(string $id, array $data)
 * @method BoolResult deleteRelationship(string $id)
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
 * @method SFCreationResult createTriggerHandler(array $data)
 * @method SFObjectResult getTriggerHandler(string $id, array $fields = [])
 * @method BoolResult patchTriggerHandler(string $id, array $data)
 * @method BoolResult deleteTriggerHandler(string $id)
 * @method SFCreationResult createUser(array $data)
 * @method SFObjectResult getUser(string $id, array $fields = [])
 * @method BoolResult patchUser(string $id, array $data)
 * @method BoolResult deleteUser(string $id)
 * @method SFCreationResult createUserLicense(array $data)
 * @method SFObjectResult getUserLicense(string $id, array $fields = [])
 * @method BoolResult patchUserLicense(string $id, array $data)
 * @method BoolResult deleteUserLicense(string $id)
 */
class NPSPClient extends Client {
  public function __construct(SFAPIClient $client) {
    parent::__construct($client);
    $types = require __DIR__ . '/SalesForce/ObjectTypes.php';
    $npspTypes = require __DIR__ . '/SalesForce/NPSPObjectTypes.php';

    $this->_types = array_merge($types, $npspTypes);
    $this->_typeNames = array_keys($this->_types);
  }
}