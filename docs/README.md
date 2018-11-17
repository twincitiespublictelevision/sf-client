# sf-client

## Table of Contents

* [BoolResult](#boolresult)
    * [__construct](#__construct)
    * [ok](#ok)
    * [err](#err)
    * [isOk](#isok)
    * [isError](#iserror)
    * [value](#value)
    * [getErr](#geterr)
    * [valueOr](#valueor)
* [Client](#client)
    * [createAccount](#createaccount)
    * [getAccount](#getaccount)
    * [patchAccount](#patchaccount)
    * [deleteAccount](#deleteaccount)
    * [createActivity](#createactivity)
    * [getActivity](#getactivity)
    * [patchActivity](#patchactivity)
    * [deleteActivity](#deleteactivity)
    * [createAsset](#createasset)
    * [getAsset](#getasset)
    * [patchAsset](#patchasset)
    * [deleteAsset](#deleteasset)
    * [createAssetRelationship](#createassetrelationship)
    * [getAssetRelationship](#getassetrelationship)
    * [patchAssetRelationship](#patchassetrelationship)
    * [deleteAssetRelationship](#deleteassetrelationship)
    * [createCampaign](#createcampaign)
    * [getCampaign](#getcampaign)
    * [patchCampaign](#patchcampaign)
    * [deleteCampaign](#deletecampaign)
    * [createCampaignMember](#createcampaignmember)
    * [getCampaignMember](#getcampaignmember)
    * [patchCampaignMember](#patchcampaignmember)
    * [deleteCampaignMember](#deletecampaignmember)
    * [createCase](#createcase)
    * [getCase](#getcase)
    * [patchCase](#patchcase)
    * [deleteCase](#deletecase)
    * [createContact](#createcontact)
    * [getContact](#getcontact)
    * [patchContact](#patchcontact)
    * [deleteContact](#deletecontact)
    * [createContentVersion](#createcontentversion)
    * [getContentVersion](#getcontentversion)
    * [patchContentVersion](#patchcontentversion)
    * [deleteContentVersion](#deletecontentversion)
    * [createContract](#createcontract)
    * [getContract](#getcontract)
    * [patchContract](#patchcontract)
    * [deleteContract](#deletecontract)
    * [createContractContactRole](#createcontractcontactrole)
    * [getContractContactRole](#getcontractcontactrole)
    * [patchContractContactRole](#patchcontractcontactrole)
    * [deleteContractContactRole](#deletecontractcontactrole)
    * [createDuplicateRecordItem](#createduplicaterecorditem)
    * [getDuplicateRecordItem](#getduplicaterecorditem)
    * [patchDuplicateRecordItem](#patchduplicaterecorditem)
    * [deleteDuplicateRecordItem](#deleteduplicaterecorditem)
    * [createDuplicateRecordSet](#createduplicaterecordset)
    * [getDuplicateRecordSet](#getduplicaterecordset)
    * [patchDuplicateRecordSet](#patchduplicaterecordset)
    * [deleteDuplicateRecordSet](#deleteduplicaterecordset)
    * [createEmailMessage](#createemailmessage)
    * [getEmailMessage](#getemailmessage)
    * [patchEmailMessage](#patchemailmessage)
    * [deleteEmailMessage](#deleteemailmessage)
    * [createEvent](#createevent)
    * [getEvent](#getevent)
    * [patchEvent](#patchevent)
    * [deleteEvent](#deleteevent)
    * [createLead](#createlead)
    * [getLead](#getlead)
    * [patchLead](#patchlead)
    * [deleteLead](#deletelead)
    * [createMacro](#createmacro)
    * [getMacro](#getmacro)
    * [patchMacro](#patchmacro)
    * [deleteMacro](#deletemacro)
    * [createOpportunity](#createopportunity)
    * [getOpportunity](#getopportunity)
    * [patchOpportunity](#patchopportunity)
    * [deleteOpportunity](#deleteopportunity)
    * [createOpportunityLineItem](#createopportunitylineitem)
    * [getOpportunityLineItem](#getopportunitylineitem)
    * [patchOpportunityLineItem](#patchopportunitylineitem)
    * [deleteOpportunityLineItem](#deleteopportunitylineitem)
    * [createOrder](#createorder)
    * [getOrder](#getorder)
    * [patchOrder](#patchorder)
    * [deleteOrder](#deleteorder)
    * [createOrderItem](#createorderitem)
    * [getOrderItem](#getorderitem)
    * [patchOrderItem](#patchorderitem)
    * [deleteOrderItem](#deleteorderitem)
    * [createPricebook2](#createpricebook2)
    * [getPricebook2](#getpricebook2)
    * [patchPricebook2](#patchpricebook2)
    * [deletePricebook2](#deletepricebook2)
    * [createPricebookEntry](#createpricebookentry)
    * [getPricebookEntry](#getpricebookentry)
    * [patchPricebookEntry](#patchpricebookentry)
    * [deletePricebookEntry](#deletepricebookentry)
    * [createQuickText](#createquicktext)
    * [getQuickText](#getquicktext)
    * [patchQuickText](#patchquicktext)
    * [deleteQuickText](#deletequicktext)
    * [createScorecard](#createscorecard)
    * [getScorecard](#getscorecard)
    * [patchScorecard](#patchscorecard)
    * [deleteScorecard](#deletescorecard)
    * [createScorecardAssociation](#createscorecardassociation)
    * [getScorecardAssociation](#getscorecardassociation)
    * [patchScorecardAssociation](#patchscorecardassociation)
    * [deleteScorecardAssociation](#deletescorecardassociation)
    * [createScorecardMetric](#createscorecardmetric)
    * [getScorecardMetric](#getscorecardmetric)
    * [patchScorecardMetric](#patchscorecardmetric)
    * [deleteScorecardMetric](#deletescorecardmetric)
    * [createSignupRequest](#createsignuprequest)
    * [getSignupRequest](#getsignuprequest)
    * [patchSignupRequest](#patchsignuprequest)
    * [deleteSignupRequest](#deletesignuprequest)
    * [createSocialPersona](#createsocialpersona)
    * [getSocialPersona](#getsocialpersona)
    * [patchSocialPersona](#patchsocialpersona)
    * [deleteSocialPersona](#deletesocialpersona)
    * [createSocialPost](#createsocialpost)
    * [getSocialPost](#getsocialpost)
    * [patchSocialPost](#patchsocialpost)
    * [deleteSocialPost](#deletesocialpost)
    * [createTask](#createtask)
    * [getTask](#gettask)
    * [patchTask](#patchtask)
    * [deleteTask](#deletetask)
    * [createUser](#createuser)
    * [getUser](#getuser)
    * [patchUser](#patchuser)
    * [deleteUser](#deleteuser)
    * [createUserProvisioningRequest](#createuserprovisioningrequest)
    * [getUserProvisioningRequest](#getuserprovisioningrequest)
    * [patchUserProvisioningRequest](#patchuserprovisioningrequest)
    * [deleteUserProvisioningRequest](#deleteuserprovisioningrequest)
    * [__construct](#__construct-1)
    * [search](#search)
* [Element](#element)
    * [__construct](#__construct-2)
* [Endpoint](#endpoint)
    * [__construct](#__construct-3)
    * [getUrl](#geturl)
* [FailedToAuthenticate](#failedtoauthenticate)
* [NPSPClient](#npspclient)
    * [createAccount](#createaccount-1)
    * [getAccount](#getaccount-1)
    * [patchAccount](#patchaccount-1)
    * [deleteAccount](#deleteaccount-1)
    * [createActivity](#createactivity-1)
    * [getActivity](#getactivity-1)
    * [patchActivity](#patchactivity-1)
    * [deleteActivity](#deleteactivity-1)
    * [createAddress](#createaddress)
    * [getAddress](#getaddress)
    * [patchAddress](#patchaddress)
    * [deleteAddress](#deleteaddress)
    * [createAffiliation](#createaffiliation)
    * [getAffiliation](#getaffiliation)
    * [patchAffiliation](#patchaffiliation)
    * [deleteAffiliation](#deleteaffiliation)
    * [createAllocation](#createallocation)
    * [getAllocation](#getallocation)
    * [patchAllocation](#patchallocation)
    * [deleteAllocation](#deleteallocation)
    * [createAsset](#createasset-1)
    * [getAsset](#getasset-1)
    * [patchAsset](#patchasset-1)
    * [deleteAsset](#deleteasset-1)
    * [createAssetRelationship](#createassetrelationship-1)
    * [getAssetRelationship](#getassetrelationship-1)
    * [patchAssetRelationship](#patchassetrelationship-1)
    * [deleteAssetRelationship](#deleteassetrelationship-1)
    * [createBatch](#createbatch)
    * [getBatch](#getbatch)
    * [patchBatch](#patchbatch)
    * [deleteBatch](#deletebatch)
    * [createCampaign](#createcampaign-1)
    * [getCampaign](#getcampaign-1)
    * [patchCampaign](#patchcampaign-1)
    * [deleteCampaign](#deletecampaign-1)
    * [createCampaignMember](#createcampaignmember-1)
    * [getCampaignMember](#getcampaignmember-1)
    * [patchCampaignMember](#patchcampaignmember-1)
    * [deleteCampaignMember](#deletecampaignmember-1)
    * [createCase](#createcase-1)
    * [getCase](#getcase-1)
    * [patchCase](#patchcase-1)
    * [deleteCase](#deletecase-1)
    * [createContact](#createcontact-1)
    * [getContact](#getcontact-1)
    * [patchContact](#patchcontact-1)
    * [deleteContact](#deletecontact-1)
    * [createContentVersion](#createcontentversion-1)
    * [getContentVersion](#getcontentversion-1)
    * [patchContentVersion](#patchcontentversion-1)
    * [deleteContentVersion](#deletecontentversion-1)
    * [createContract](#createcontract-1)
    * [getContract](#getcontract-1)
    * [patchContract](#patchcontract-1)
    * [deleteContract](#deletecontract-1)
    * [createContractContactRole](#createcontractcontactrole-1)
    * [getContractContactRole](#getcontractcontactrole-1)
    * [patchContractContactRole](#patchcontractcontactrole-1)
    * [deleteContractContactRole](#deletecontractcontactrole-1)
    * [createDataImport](#createdataimport)
    * [getDataImport](#getdataimport)
    * [patchDataImport](#patchdataimport)
    * [deleteDataImport](#deletedataimport)
    * [createDataImportBatch](#createdataimportbatch)
    * [getDataImportBatch](#getdataimportbatch)
    * [patchDataImportBatch](#patchdataimportbatch)
    * [deleteDataImportBatch](#deletedataimportbatch)
    * [createDuplicateRecordItem](#createduplicaterecorditem-1)
    * [getDuplicateRecordItem](#getduplicaterecorditem-1)
    * [patchDuplicateRecordItem](#patchduplicaterecorditem-1)
    * [deleteDuplicateRecordItem](#deleteduplicaterecorditem-1)
    * [createDuplicateRecordSet](#createduplicaterecordset-1)
    * [getDuplicateRecordSet](#getduplicaterecordset-1)
    * [patchDuplicateRecordSet](#patchduplicaterecordset-1)
    * [deleteDuplicateRecordSet](#deleteduplicaterecordset-1)
    * [createEmailMessage](#createemailmessage-1)
    * [getEmailMessage](#getemailmessage-1)
    * [patchEmailMessage](#patchemailmessage-1)
    * [deleteEmailMessage](#deleteemailmessage-1)
    * [createEngagementPlan](#createengagementplan)
    * [getEngagementPlan](#getengagementplan)
    * [patchEngagementPlan](#patchengagementplan)
    * [deleteEngagementPlan](#deleteengagementplan)
    * [createEngagementPlanTask](#createengagementplantask)
    * [getEngagementPlanTask](#getengagementplantask)
    * [patchEngagementPlanTask](#patchengagementplantask)
    * [deleteEngagementPlanTask](#deleteengagementplantask)
    * [createEngagementPlanTemplate](#createengagementplantemplate)
    * [getEngagementPlanTemplate](#getengagementplantemplate)
    * [patchEngagementPlanTemplate](#patchengagementplantemplate)
    * [deleteEngagementPlanTemplate](#deleteengagementplantemplate)
    * [createError](#createerror)
    * [getError](#geterror)
    * [patchError](#patcherror)
    * [deleteError](#deleteerror)
    * [createEvent](#createevent-1)
    * [getEvent](#getevent-1)
    * [patchEvent](#patchevent-1)
    * [deleteEvent](#deleteevent-1)
    * [createGeneralAccountingUnit](#creategeneralaccountingunit)
    * [getGeneralAccountingUnit](#getgeneralaccountingunit)
    * [patchGeneralAccountingUnit](#patchgeneralaccountingunit)
    * [deleteGeneralAccountingUnit](#deletegeneralaccountingunit)
    * [createGrantDeadline](#creategrantdeadline)
    * [getGrantDeadline](#getgrantdeadline)
    * [patchGrantDeadline](#patchgrantdeadline)
    * [deleteGrantDeadline](#deletegrantdeadline)
    * [createHousehold](#createhousehold)
    * [getHousehold](#gethousehold)
    * [patchHousehold](#patchhousehold)
    * [deleteHousehold](#deletehousehold)
    * [createLead](#createlead-1)
    * [getLead](#getlead-1)
    * [patchLead](#patchlead-1)
    * [deleteLead](#deletelead-1)
    * [createLevel](#createlevel)
    * [getLevel](#getlevel)
    * [patchLevel](#patchlevel)
    * [deleteLevel](#deletelevel)
    * [createMacro](#createmacro-1)
    * [getMacro](#getmacro-1)
    * [patchMacro](#patchmacro-1)
    * [deleteMacro](#deletemacro-1)
    * [createOppPayment](#createopppayment)
    * [getOppPayment](#getopppayment)
    * [patchOppPayment](#patchopppayment)
    * [deleteOppPayment](#deleteopppayment)
    * [createOpportunity](#createopportunity-1)
    * [getOpportunity](#getopportunity-1)
    * [patchOpportunity](#patchopportunity-1)
    * [deleteOpportunity](#deleteopportunity-1)
    * [createOpportunityLineItem](#createopportunitylineitem-1)
    * [getOpportunityLineItem](#getopportunitylineitem-1)
    * [patchOpportunityLineItem](#patchopportunitylineitem-1)
    * [deleteOpportunityLineItem](#deleteopportunitylineitem-1)
    * [createOrder](#createorder-1)
    * [getOrder](#getorder-1)
    * [patchOrder](#patchorder-1)
    * [deleteOrder](#deleteorder-1)
    * [createOrderItem](#createorderitem-1)
    * [getOrderItem](#getorderitem-1)
    * [patchOrderItem](#patchorderitem-1)
    * [deleteOrderItem](#deleteorderitem-1)
    * [createPartialSoftCredit](#createpartialsoftcredit)
    * [getPartialSoftCredit](#getpartialsoftcredit)
    * [patchPartialSoftCredit](#patchpartialsoftcredit)
    * [deletePartialSoftCredit](#deletepartialsoftcredit)
    * [createPricebook2](#createpricebook2-1)
    * [getPricebook2](#getpricebook2-1)
    * [patchPricebook2](#patchpricebook2-1)
    * [deletePricebook2](#deletepricebook2-1)
    * [createPricebookEntry](#createpricebookentry-1)
    * [getPricebookEntry](#getpricebookentry-1)
    * [patchPricebookEntry](#patchpricebookentry-1)
    * [deletePricebookEntry](#deletepricebookentry-1)
    * [createQuickText](#createquicktext-1)
    * [getQuickText](#getquicktext-1)
    * [patchQuickText](#patchquicktext-1)
    * [deleteQuickText](#deletequicktext-1)
    * [createRecurringDonation](#createrecurringdonation)
    * [getRecurringDonation](#getrecurringdonation)
    * [patchRecurringDonation](#patchrecurringdonation)
    * [deleteRecurringDonation](#deleterecurringdonation)
    * [createRelationship](#createrelationship)
    * [getRelationship](#getrelationship)
    * [patchRelationship](#patchrelationship)
    * [deleteRelationship](#deleterelationship)
    * [createScorecard](#createscorecard-1)
    * [getScorecard](#getscorecard-1)
    * [patchScorecard](#patchscorecard-1)
    * [deleteScorecard](#deletescorecard-1)
    * [createScorecardAssociation](#createscorecardassociation-1)
    * [getScorecardAssociation](#getscorecardassociation-1)
    * [patchScorecardAssociation](#patchscorecardassociation-1)
    * [deleteScorecardAssociation](#deletescorecardassociation-1)
    * [createScorecardMetric](#createscorecardmetric-1)
    * [getScorecardMetric](#getscorecardmetric-1)
    * [patchScorecardMetric](#patchscorecardmetric-1)
    * [deleteScorecardMetric](#deletescorecardmetric-1)
    * [createSignupRequest](#createsignuprequest-1)
    * [getSignupRequest](#getsignuprequest-1)
    * [patchSignupRequest](#patchsignuprequest-1)
    * [deleteSignupRequest](#deletesignuprequest-1)
    * [createSocialPersona](#createsocialpersona-1)
    * [getSocialPersona](#getsocialpersona-1)
    * [patchSocialPersona](#patchsocialpersona-1)
    * [deleteSocialPersona](#deletesocialpersona-1)
    * [createSocialPost](#createsocialpost-1)
    * [getSocialPost](#getsocialpost-1)
    * [patchSocialPost](#patchsocialpost-1)
    * [deleteSocialPost](#deletesocialpost-1)
    * [createTask](#createtask-1)
    * [getTask](#gettask-1)
    * [patchTask](#patchtask-1)
    * [deleteTask](#deletetask-1)
    * [createTriggerHandler](#createtriggerhandler)
    * [getTriggerHandler](#gettriggerhandler)
    * [patchTriggerHandler](#patchtriggerhandler)
    * [deleteTriggerHandler](#deletetriggerhandler)
    * [createUser](#createuser-1)
    * [getUser](#getuser-1)
    * [patchUser](#patchuser-1)
    * [deleteUser](#deleteuser-1)
    * [createUserProvisioningRequest](#createuserprovisioningrequest-1)
    * [getUserProvisioningRequest](#getuserprovisioningrequest-1)
    * [patchUserProvisioningRequest](#patchuserprovisioningrequest-1)
    * [deleteUserProvisioningRequest](#deleteuserprovisioningrequest-1)
    * [createAccount](#createaccount-2)
    * [getAccount](#getaccount-2)
    * [patchAccount](#patchaccount-2)
    * [deleteAccount](#deleteaccount-2)
    * [createActivity](#createactivity-2)
    * [getActivity](#getactivity-2)
    * [patchActivity](#patchactivity-2)
    * [deleteActivity](#deleteactivity-2)
    * [createAsset](#createasset-2)
    * [getAsset](#getasset-2)
    * [patchAsset](#patchasset-2)
    * [deleteAsset](#deleteasset-2)
    * [createAssetRelationship](#createassetrelationship-2)
    * [getAssetRelationship](#getassetrelationship-2)
    * [patchAssetRelationship](#patchassetrelationship-2)
    * [deleteAssetRelationship](#deleteassetrelationship-2)
    * [createCampaign](#createcampaign-2)
    * [getCampaign](#getcampaign-2)
    * [patchCampaign](#patchcampaign-2)
    * [deleteCampaign](#deletecampaign-2)
    * [createCampaignMember](#createcampaignmember-2)
    * [getCampaignMember](#getcampaignmember-2)
    * [patchCampaignMember](#patchcampaignmember-2)
    * [deleteCampaignMember](#deletecampaignmember-2)
    * [createCase](#createcase-2)
    * [getCase](#getcase-2)
    * [patchCase](#patchcase-2)
    * [deleteCase](#deletecase-2)
    * [createContact](#createcontact-2)
    * [getContact](#getcontact-2)
    * [patchContact](#patchcontact-2)
    * [deleteContact](#deletecontact-2)
    * [createContentVersion](#createcontentversion-2)
    * [getContentVersion](#getcontentversion-2)
    * [patchContentVersion](#patchcontentversion-2)
    * [deleteContentVersion](#deletecontentversion-2)
    * [createContract](#createcontract-2)
    * [getContract](#getcontract-2)
    * [patchContract](#patchcontract-2)
    * [deleteContract](#deletecontract-2)
    * [createContractContactRole](#createcontractcontactrole-2)
    * [getContractContactRole](#getcontractcontactrole-2)
    * [patchContractContactRole](#patchcontractcontactrole-2)
    * [deleteContractContactRole](#deletecontractcontactrole-2)
    * [createDuplicateRecordItem](#createduplicaterecorditem-2)
    * [getDuplicateRecordItem](#getduplicaterecorditem-2)
    * [patchDuplicateRecordItem](#patchduplicaterecorditem-2)
    * [deleteDuplicateRecordItem](#deleteduplicaterecorditem-2)
    * [createDuplicateRecordSet](#createduplicaterecordset-2)
    * [getDuplicateRecordSet](#getduplicaterecordset-2)
    * [patchDuplicateRecordSet](#patchduplicaterecordset-2)
    * [deleteDuplicateRecordSet](#deleteduplicaterecordset-2)
    * [createEmailMessage](#createemailmessage-2)
    * [getEmailMessage](#getemailmessage-2)
    * [patchEmailMessage](#patchemailmessage-2)
    * [deleteEmailMessage](#deleteemailmessage-2)
    * [createEvent](#createevent-2)
    * [getEvent](#getevent-2)
    * [patchEvent](#patchevent-2)
    * [deleteEvent](#deleteevent-2)
    * [createLead](#createlead-2)
    * [getLead](#getlead-2)
    * [patchLead](#patchlead-2)
    * [deleteLead](#deletelead-2)
    * [createMacro](#createmacro-2)
    * [getMacro](#getmacro-2)
    * [patchMacro](#patchmacro-2)
    * [deleteMacro](#deletemacro-2)
    * [createOpportunity](#createopportunity-2)
    * [getOpportunity](#getopportunity-2)
    * [patchOpportunity](#patchopportunity-2)
    * [deleteOpportunity](#deleteopportunity-2)
    * [createOpportunityLineItem](#createopportunitylineitem-2)
    * [getOpportunityLineItem](#getopportunitylineitem-2)
    * [patchOpportunityLineItem](#patchopportunitylineitem-2)
    * [deleteOpportunityLineItem](#deleteopportunitylineitem-2)
    * [createOrder](#createorder-2)
    * [getOrder](#getorder-2)
    * [patchOrder](#patchorder-2)
    * [deleteOrder](#deleteorder-2)
    * [createOrderItem](#createorderitem-2)
    * [getOrderItem](#getorderitem-2)
    * [patchOrderItem](#patchorderitem-2)
    * [deleteOrderItem](#deleteorderitem-2)
    * [createPricebook2](#createpricebook2-2)
    * [getPricebook2](#getpricebook2-2)
    * [patchPricebook2](#patchpricebook2-2)
    * [deletePricebook2](#deletepricebook2-2)
    * [createPricebookEntry](#createpricebookentry-2)
    * [getPricebookEntry](#getpricebookentry-2)
    * [patchPricebookEntry](#patchpricebookentry-2)
    * [deletePricebookEntry](#deletepricebookentry-2)
    * [createQuickText](#createquicktext-2)
    * [getQuickText](#getquicktext-2)
    * [patchQuickText](#patchquicktext-2)
    * [deleteQuickText](#deletequicktext-2)
    * [createScorecard](#createscorecard-2)
    * [getScorecard](#getscorecard-2)
    * [patchScorecard](#patchscorecard-2)
    * [deleteScorecard](#deletescorecard-2)
    * [createScorecardAssociation](#createscorecardassociation-2)
    * [getScorecardAssociation](#getscorecardassociation-2)
    * [patchScorecardAssociation](#patchscorecardassociation-2)
    * [deleteScorecardAssociation](#deletescorecardassociation-2)
    * [createScorecardMetric](#createscorecardmetric-2)
    * [getScorecardMetric](#getscorecardmetric-2)
    * [patchScorecardMetric](#patchscorecardmetric-2)
    * [deleteScorecardMetric](#deletescorecardmetric-2)
    * [createSignupRequest](#createsignuprequest-2)
    * [getSignupRequest](#getsignuprequest-2)
    * [patchSignupRequest](#patchsignuprequest-2)
    * [deleteSignupRequest](#deletesignuprequest-2)
    * [createSocialPersona](#createsocialpersona-2)
    * [getSocialPersona](#getsocialpersona-2)
    * [patchSocialPersona](#patchsocialpersona-2)
    * [deleteSocialPersona](#deletesocialpersona-2)
    * [createSocialPost](#createsocialpost-2)
    * [getSocialPost](#getsocialpost-2)
    * [patchSocialPost](#patchsocialpost-2)
    * [deleteSocialPost](#deletesocialpost-2)
    * [createTask](#createtask-2)
    * [getTask](#gettask-2)
    * [patchTask](#patchtask-2)
    * [deleteTask](#deletetask-2)
    * [createUser](#createuser-2)
    * [getUser](#getuser-2)
    * [patchUser](#patchuser-2)
    * [deleteUser](#deleteuser-2)
    * [createUserProvisioningRequest](#createuserprovisioningrequest-2)
    * [getUserProvisioningRequest](#getuserprovisioningrequest-2)
    * [patchUserProvisioningRequest](#patchuserprovisioningrequest-2)
    * [deleteUserProvisioningRequest](#deleteuserprovisioningrequest-2)
    * [__construct](#__construct-4)
    * [search](#search-1)
* [Result](#result)
    * [ok](#ok-1)
    * [err](#err-1)
    * [isError](#iserror-1)
    * [isOk](#isok-1)
    * [value](#value-1)
    * [getErr](#geterr-1)
    * [valueOr](#valueor-1)
* [ScopedSFAPIClient](#scopedsfapiclient)
    * [__construct](#__construct-5)
    * [getScope](#getscope)
    * [create](#create)
    * [get](#get)
    * [patch](#patch)
    * [delete](#delete)
* [SFAPIClient](#sfapiclient)
    * [connect](#connect)
    * [connectWith](#connectwith)
    * [scope](#scope)
    * [create](#create-1)
    * [get](#get-1)
    * [patch](#patch-1)
    * [delete](#delete-1)
    * [query](#query)
* [SFCreation](#sfcreation)
    * [__construct](#__construct-6)
    * [getId](#getid)
    * [wasSuccessful](#wassuccessful)
    * [getErrors](#geterrors)
* [SFCreationResult](#sfcreationresult)
    * [__construct](#__construct-7)
    * [ok](#ok-2)
    * [err](#err-2)
    * [isOk](#isok-2)
    * [isError](#iserror-2)
    * [value](#value-2)
    * [getErr](#geterr-2)
    * [valueOr](#valueor-2)
* [SFObject](#sfobject)
    * [__construct](#__construct-8)
* [SFRecords](#sfrecords)
    * [__construct](#__construct-9)
    * [getTotal](#gettotal)
    * [hasMore](#hasmore)
    * [getRecords](#getrecords)
* [SFRecordsResult](#sfrecordsresult)
    * [__construct](#__construct-10)
    * [ok](#ok-3)
    * [err](#err-3)
    * [isOk](#isok-3)
    * [isError](#iserror-3)
    * [value](#value-3)
    * [getErr](#geterr-3)
    * [valueOr](#valueor-3)

## BoolResult

Class BoolResult



* Full name: \SFClient\Result\BoolResult


### __construct

Bool constructor.

```php
BoolResult::__construct( \SFClient\Result\Result $res )
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$res` | **\SFClient\Result\Result** |  |




---

### ok



```php
BoolResult::ok( boolean $value ): \SFClient\Result\BoolResult
```



* This method is **static**.
**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$value` | **boolean** |  |



**See Also:**

* \SFClient\Result\Result::ok() 

---

### err



```php
BoolResult::err( \Exception $err ): \SFClient\Result\BoolResult
```



* This method is **static**.
**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$err` | **\Exception** |  |



**See Also:**

* \SFClient\Result\Result::err() 

---

### isOk



```php
BoolResult::isOk(  ): boolean
```






**See Also:**

* \SFClient\Result\Result::isOK() 

---

### isError



```php
BoolResult::isError(  ): boolean
```






**See Also:**

* \SFClient\Result\Result::Error() 

---

### value



```php
BoolResult::value(  ): boolean
```






**See Also:**

* \SFClient\Result\Result::value() 

---

### getErr



```php
BoolResult::getErr(  ): \Exception
```






**See Also:**

* \SFClient\Result\Result::getErr() 

---

### valueOr



```php
BoolResult::valueOr(  $fallback ): mixed
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$fallback` | **** |  |



**See Also:**

* \SFClient\Result\Result::valueOr() 

---

## Client

Class Client

Client for interacting with the SalesForce objects. This client is a small
wrapper around an underlying SalesForce API Client. Its purpose is to allow
for direct access to objects as opposed to general CRUD methods. By design
only base SalesForce objects are supporting by this client.

```php
$client = new Client(SFAPIClient::connect($endpoint, $auth));
```

* Full name: \SFClient\Client


### createAccount



```php
Client::createAccount( array $data ): \SFClient\Result\SFCreationResult
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$data` | **array** |  |




---

### getAccount



```php
Client::getAccount( string $id, array $fields = [] ): \SFClient\Result\SFObjectResult
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$id` | **string** |  |
| `$fields` | **array** |  |




---

### patchAccount



```php
Client::patchAccount( string $id, array $data ): \SFClient\Result\BoolResult
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$id` | **string** |  |
| `$data` | **array** |  |




---

### deleteAccount



```php
Client::deleteAccount( string $id ): \SFClient\Result\BoolResult
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$id` | **string** |  |




---

### createActivity



```php
Client::createActivity( array $data ): \SFClient\Result\SFCreationResult
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$data` | **array** |  |




---

### getActivity



```php
Client::getActivity( string $id, array $fields = [] ): \SFClient\Result\SFObjectResult
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$id` | **string** |  |
| `$fields` | **array** |  |




---

### patchActivity



```php
Client::patchActivity( string $id, array $data ): \SFClient\Result\BoolResult
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$id` | **string** |  |
| `$data` | **array** |  |




---

### deleteActivity



```php
Client::deleteActivity( string $id ): \SFClient\Result\BoolResult
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$id` | **string** |  |




---

### createAsset



```php
Client::createAsset( array $data ): \SFClient\Result\SFCreationResult
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$data` | **array** |  |




---

### getAsset



```php
Client::getAsset( string $id, array $fields = [] ): \SFClient\Result\SFObjectResult
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$id` | **string** |  |
| `$fields` | **array** |  |




---

### patchAsset



```php
Client::patchAsset( string $id, array $data ): \SFClient\Result\BoolResult
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$id` | **string** |  |
| `$data` | **array** |  |




---

### deleteAsset



```php
Client::deleteAsset( string $id ): \SFClient\Result\BoolResult
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$id` | **string** |  |




---

### createAssetRelationship



```php
Client::createAssetRelationship( array $data ): \SFClient\Result\SFCreationResult
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$data` | **array** |  |




---

### getAssetRelationship



```php
Client::getAssetRelationship( string $id, array $fields = [] ): \SFClient\Result\SFObjectResult
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$id` | **string** |  |
| `$fields` | **array** |  |




---

### patchAssetRelationship



```php
Client::patchAssetRelationship( string $id, array $data ): \SFClient\Result\BoolResult
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$id` | **string** |  |
| `$data` | **array** |  |




---

### deleteAssetRelationship



```php
Client::deleteAssetRelationship( string $id ): \SFClient\Result\BoolResult
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$id` | **string** |  |




---

### createCampaign



```php
Client::createCampaign( array $data ): \SFClient\Result\SFCreationResult
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$data` | **array** |  |




---

### getCampaign



```php
Client::getCampaign( string $id, array $fields = [] ): \SFClient\Result\SFObjectResult
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$id` | **string** |  |
| `$fields` | **array** |  |




---

### patchCampaign



```php
Client::patchCampaign( string $id, array $data ): \SFClient\Result\BoolResult
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$id` | **string** |  |
| `$data` | **array** |  |




---

### deleteCampaign



```php
Client::deleteCampaign( string $id ): \SFClient\Result\BoolResult
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$id` | **string** |  |




---

### createCampaignMember



```php
Client::createCampaignMember( array $data ): \SFClient\Result\SFCreationResult
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$data` | **array** |  |




---

### getCampaignMember



```php
Client::getCampaignMember( string $id, array $fields = [] ): \SFClient\Result\SFObjectResult
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$id` | **string** |  |
| `$fields` | **array** |  |




---

### patchCampaignMember



```php
Client::patchCampaignMember( string $id, array $data ): \SFClient\Result\BoolResult
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$id` | **string** |  |
| `$data` | **array** |  |




---

### deleteCampaignMember



```php
Client::deleteCampaignMember( string $id ): \SFClient\Result\BoolResult
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$id` | **string** |  |




---

### createCase



```php
Client::createCase( array $data ): \SFClient\Result\SFCreationResult
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$data` | **array** |  |




---

### getCase



```php
Client::getCase( string $id, array $fields = [] ): \SFClient\Result\SFObjectResult
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$id` | **string** |  |
| `$fields` | **array** |  |




---

### patchCase



```php
Client::patchCase( string $id, array $data ): \SFClient\Result\BoolResult
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$id` | **string** |  |
| `$data` | **array** |  |




---

### deleteCase



```php
Client::deleteCase( string $id ): \SFClient\Result\BoolResult
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$id` | **string** |  |




---

### createContact



```php
Client::createContact( array $data ): \SFClient\Result\SFCreationResult
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$data` | **array** |  |




---

### getContact



```php
Client::getContact( string $id, array $fields = [] ): \SFClient\Result\SFObjectResult
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$id` | **string** |  |
| `$fields` | **array** |  |




---

### patchContact



```php
Client::patchContact( string $id, array $data ): \SFClient\Result\BoolResult
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$id` | **string** |  |
| `$data` | **array** |  |




---

### deleteContact



```php
Client::deleteContact( string $id ): \SFClient\Result\BoolResult
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$id` | **string** |  |




---

### createContentVersion



```php
Client::createContentVersion( array $data ): \SFClient\Result\SFCreationResult
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$data` | **array** |  |




---

### getContentVersion



```php
Client::getContentVersion( string $id, array $fields = [] ): \SFClient\Result\SFObjectResult
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$id` | **string** |  |
| `$fields` | **array** |  |




---

### patchContentVersion



```php
Client::patchContentVersion( string $id, array $data ): \SFClient\Result\BoolResult
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$id` | **string** |  |
| `$data` | **array** |  |




---

### deleteContentVersion



```php
Client::deleteContentVersion( string $id ): \SFClient\Result\BoolResult
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$id` | **string** |  |




---

### createContract



```php
Client::createContract( array $data ): \SFClient\Result\SFCreationResult
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$data` | **array** |  |




---

### getContract



```php
Client::getContract( string $id, array $fields = [] ): \SFClient\Result\SFObjectResult
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$id` | **string** |  |
| `$fields` | **array** |  |




---

### patchContract



```php
Client::patchContract( string $id, array $data ): \SFClient\Result\BoolResult
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$id` | **string** |  |
| `$data` | **array** |  |




---

### deleteContract



```php
Client::deleteContract( string $id ): \SFClient\Result\BoolResult
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$id` | **string** |  |




---

### createContractContactRole



```php
Client::createContractContactRole( array $data ): \SFClient\Result\SFCreationResult
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$data` | **array** |  |




---

### getContractContactRole



```php
Client::getContractContactRole( string $id, array $fields = [] ): \SFClient\Result\SFObjectResult
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$id` | **string** |  |
| `$fields` | **array** |  |




---

### patchContractContactRole



```php
Client::patchContractContactRole( string $id, array $data ): \SFClient\Result\BoolResult
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$id` | **string** |  |
| `$data` | **array** |  |




---

### deleteContractContactRole



```php
Client::deleteContractContactRole( string $id ): \SFClient\Result\BoolResult
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$id` | **string** |  |




---

### createDuplicateRecordItem



```php
Client::createDuplicateRecordItem( array $data ): \SFClient\Result\SFCreationResult
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$data` | **array** |  |




---

### getDuplicateRecordItem



```php
Client::getDuplicateRecordItem( string $id, array $fields = [] ): \SFClient\Result\SFObjectResult
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$id` | **string** |  |
| `$fields` | **array** |  |




---

### patchDuplicateRecordItem



```php
Client::patchDuplicateRecordItem( string $id, array $data ): \SFClient\Result\BoolResult
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$id` | **string** |  |
| `$data` | **array** |  |




---

### deleteDuplicateRecordItem



```php
Client::deleteDuplicateRecordItem( string $id ): \SFClient\Result\BoolResult
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$id` | **string** |  |




---

### createDuplicateRecordSet



```php
Client::createDuplicateRecordSet( array $data ): \SFClient\Result\SFCreationResult
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$data` | **array** |  |




---

### getDuplicateRecordSet



```php
Client::getDuplicateRecordSet( string $id, array $fields = [] ): \SFClient\Result\SFObjectResult
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$id` | **string** |  |
| `$fields` | **array** |  |




---

### patchDuplicateRecordSet



```php
Client::patchDuplicateRecordSet( string $id, array $data ): \SFClient\Result\BoolResult
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$id` | **string** |  |
| `$data` | **array** |  |




---

### deleteDuplicateRecordSet



```php
Client::deleteDuplicateRecordSet( string $id ): \SFClient\Result\BoolResult
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$id` | **string** |  |




---

### createEmailMessage



```php
Client::createEmailMessage( array $data ): \SFClient\Result\SFCreationResult
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$data` | **array** |  |




---

### getEmailMessage



```php
Client::getEmailMessage( string $id, array $fields = [] ): \SFClient\Result\SFObjectResult
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$id` | **string** |  |
| `$fields` | **array** |  |




---

### patchEmailMessage



```php
Client::patchEmailMessage( string $id, array $data ): \SFClient\Result\BoolResult
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$id` | **string** |  |
| `$data` | **array** |  |




---

### deleteEmailMessage



```php
Client::deleteEmailMessage( string $id ): \SFClient\Result\BoolResult
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$id` | **string** |  |




---

### createEvent



```php
Client::createEvent( array $data ): \SFClient\Result\SFCreationResult
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$data` | **array** |  |




---

### getEvent



```php
Client::getEvent( string $id, array $fields = [] ): \SFClient\Result\SFObjectResult
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$id` | **string** |  |
| `$fields` | **array** |  |




---

### patchEvent



```php
Client::patchEvent( string $id, array $data ): \SFClient\Result\BoolResult
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$id` | **string** |  |
| `$data` | **array** |  |




---

### deleteEvent



```php
Client::deleteEvent( string $id ): \SFClient\Result\BoolResult
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$id` | **string** |  |




---

### createLead



```php
Client::createLead( array $data ): \SFClient\Result\SFCreationResult
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$data` | **array** |  |




---

### getLead



```php
Client::getLead( string $id, array $fields = [] ): \SFClient\Result\SFObjectResult
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$id` | **string** |  |
| `$fields` | **array** |  |




---

### patchLead



```php
Client::patchLead( string $id, array $data ): \SFClient\Result\BoolResult
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$id` | **string** |  |
| `$data` | **array** |  |




---

### deleteLead



```php
Client::deleteLead( string $id ): \SFClient\Result\BoolResult
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$id` | **string** |  |




---

### createMacro



```php
Client::createMacro( array $data ): \SFClient\Result\SFCreationResult
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$data` | **array** |  |




---

### getMacro



```php
Client::getMacro( string $id, array $fields = [] ): \SFClient\Result\SFObjectResult
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$id` | **string** |  |
| `$fields` | **array** |  |




---

### patchMacro



```php
Client::patchMacro( string $id, array $data ): \SFClient\Result\BoolResult
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$id` | **string** |  |
| `$data` | **array** |  |




---

### deleteMacro



```php
Client::deleteMacro( string $id ): \SFClient\Result\BoolResult
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$id` | **string** |  |




---

### createOpportunity



```php
Client::createOpportunity( array $data ): \SFClient\Result\SFCreationResult
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$data` | **array** |  |




---

### getOpportunity



```php
Client::getOpportunity( string $id, array $fields = [] ): \SFClient\Result\SFObjectResult
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$id` | **string** |  |
| `$fields` | **array** |  |




---

### patchOpportunity



```php
Client::patchOpportunity( string $id, array $data ): \SFClient\Result\BoolResult
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$id` | **string** |  |
| `$data` | **array** |  |




---

### deleteOpportunity



```php
Client::deleteOpportunity( string $id ): \SFClient\Result\BoolResult
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$id` | **string** |  |




---

### createOpportunityLineItem



```php
Client::createOpportunityLineItem( array $data ): \SFClient\Result\SFCreationResult
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$data` | **array** |  |




---

### getOpportunityLineItem



```php
Client::getOpportunityLineItem( string $id, array $fields = [] ): \SFClient\Result\SFObjectResult
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$id` | **string** |  |
| `$fields` | **array** |  |




---

### patchOpportunityLineItem



```php
Client::patchOpportunityLineItem( string $id, array $data ): \SFClient\Result\BoolResult
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$id` | **string** |  |
| `$data` | **array** |  |




---

### deleteOpportunityLineItem



```php
Client::deleteOpportunityLineItem( string $id ): \SFClient\Result\BoolResult
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$id` | **string** |  |




---

### createOrder



```php
Client::createOrder( array $data ): \SFClient\Result\SFCreationResult
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$data` | **array** |  |




---

### getOrder



```php
Client::getOrder( string $id, array $fields = [] ): \SFClient\Result\SFObjectResult
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$id` | **string** |  |
| `$fields` | **array** |  |




---

### patchOrder



```php
Client::patchOrder( string $id, array $data ): \SFClient\Result\BoolResult
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$id` | **string** |  |
| `$data` | **array** |  |




---

### deleteOrder



```php
Client::deleteOrder( string $id ): \SFClient\Result\BoolResult
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$id` | **string** |  |




---

### createOrderItem



```php
Client::createOrderItem( array $data ): \SFClient\Result\SFCreationResult
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$data` | **array** |  |




---

### getOrderItem



```php
Client::getOrderItem( string $id, array $fields = [] ): \SFClient\Result\SFObjectResult
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$id` | **string** |  |
| `$fields` | **array** |  |




---

### patchOrderItem



```php
Client::patchOrderItem( string $id, array $data ): \SFClient\Result\BoolResult
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$id` | **string** |  |
| `$data` | **array** |  |




---

### deleteOrderItem



```php
Client::deleteOrderItem( string $id ): \SFClient\Result\BoolResult
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$id` | **string** |  |




---

### createPricebook2



```php
Client::createPricebook2( array $data ): \SFClient\Result\SFCreationResult
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$data` | **array** |  |




---

### getPricebook2



```php
Client::getPricebook2( string $id, array $fields = [] ): \SFClient\Result\SFObjectResult
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$id` | **string** |  |
| `$fields` | **array** |  |




---

### patchPricebook2



```php
Client::patchPricebook2( string $id, array $data ): \SFClient\Result\BoolResult
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$id` | **string** |  |
| `$data` | **array** |  |




---

### deletePricebook2



```php
Client::deletePricebook2( string $id ): \SFClient\Result\BoolResult
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$id` | **string** |  |




---

### createPricebookEntry



```php
Client::createPricebookEntry( array $data ): \SFClient\Result\SFCreationResult
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$data` | **array** |  |




---

### getPricebookEntry



```php
Client::getPricebookEntry( string $id, array $fields = [] ): \SFClient\Result\SFObjectResult
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$id` | **string** |  |
| `$fields` | **array** |  |




---

### patchPricebookEntry



```php
Client::patchPricebookEntry( string $id, array $data ): \SFClient\Result\BoolResult
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$id` | **string** |  |
| `$data` | **array** |  |




---

### deletePricebookEntry



```php
Client::deletePricebookEntry( string $id ): \SFClient\Result\BoolResult
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$id` | **string** |  |




---

### createQuickText



```php
Client::createQuickText( array $data ): \SFClient\Result\SFCreationResult
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$data` | **array** |  |




---

### getQuickText



```php
Client::getQuickText( string $id, array $fields = [] ): \SFClient\Result\SFObjectResult
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$id` | **string** |  |
| `$fields` | **array** |  |




---

### patchQuickText



```php
Client::patchQuickText( string $id, array $data ): \SFClient\Result\BoolResult
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$id` | **string** |  |
| `$data` | **array** |  |




---

### deleteQuickText



```php
Client::deleteQuickText( string $id ): \SFClient\Result\BoolResult
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$id` | **string** |  |




---

### createScorecard



```php
Client::createScorecard( array $data ): \SFClient\Result\SFCreationResult
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$data` | **array** |  |




---

### getScorecard



```php
Client::getScorecard( string $id, array $fields = [] ): \SFClient\Result\SFObjectResult
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$id` | **string** |  |
| `$fields` | **array** |  |




---

### patchScorecard



```php
Client::patchScorecard( string $id, array $data ): \SFClient\Result\BoolResult
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$id` | **string** |  |
| `$data` | **array** |  |




---

### deleteScorecard



```php
Client::deleteScorecard( string $id ): \SFClient\Result\BoolResult
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$id` | **string** |  |




---

### createScorecardAssociation



```php
Client::createScorecardAssociation( array $data ): \SFClient\Result\SFCreationResult
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$data` | **array** |  |




---

### getScorecardAssociation



```php
Client::getScorecardAssociation( string $id, array $fields = [] ): \SFClient\Result\SFObjectResult
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$id` | **string** |  |
| `$fields` | **array** |  |




---

### patchScorecardAssociation



```php
Client::patchScorecardAssociation( string $id, array $data ): \SFClient\Result\BoolResult
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$id` | **string** |  |
| `$data` | **array** |  |




---

### deleteScorecardAssociation



```php
Client::deleteScorecardAssociation( string $id ): \SFClient\Result\BoolResult
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$id` | **string** |  |




---

### createScorecardMetric



```php
Client::createScorecardMetric( array $data ): \SFClient\Result\SFCreationResult
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$data` | **array** |  |




---

### getScorecardMetric



```php
Client::getScorecardMetric( string $id, array $fields = [] ): \SFClient\Result\SFObjectResult
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$id` | **string** |  |
| `$fields` | **array** |  |




---

### patchScorecardMetric



```php
Client::patchScorecardMetric( string $id, array $data ): \SFClient\Result\BoolResult
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$id` | **string** |  |
| `$data` | **array** |  |




---

### deleteScorecardMetric



```php
Client::deleteScorecardMetric( string $id ): \SFClient\Result\BoolResult
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$id` | **string** |  |




---

### createSignupRequest



```php
Client::createSignupRequest( array $data ): \SFClient\Result\SFCreationResult
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$data` | **array** |  |




---

### getSignupRequest



```php
Client::getSignupRequest( string $id, array $fields = [] ): \SFClient\Result\SFObjectResult
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$id` | **string** |  |
| `$fields` | **array** |  |




---

### patchSignupRequest



```php
Client::patchSignupRequest( string $id, array $data ): \SFClient\Result\BoolResult
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$id` | **string** |  |
| `$data` | **array** |  |




---

### deleteSignupRequest



```php
Client::deleteSignupRequest( string $id ): \SFClient\Result\BoolResult
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$id` | **string** |  |




---

### createSocialPersona



```php
Client::createSocialPersona( array $data ): \SFClient\Result\SFCreationResult
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$data` | **array** |  |




---

### getSocialPersona



```php
Client::getSocialPersona( string $id, array $fields = [] ): \SFClient\Result\SFObjectResult
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$id` | **string** |  |
| `$fields` | **array** |  |




---

### patchSocialPersona



```php
Client::patchSocialPersona( string $id, array $data ): \SFClient\Result\BoolResult
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$id` | **string** |  |
| `$data` | **array** |  |




---

### deleteSocialPersona



```php
Client::deleteSocialPersona( string $id ): \SFClient\Result\BoolResult
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$id` | **string** |  |




---

### createSocialPost



```php
Client::createSocialPost( array $data ): \SFClient\Result\SFCreationResult
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$data` | **array** |  |




---

### getSocialPost



```php
Client::getSocialPost( string $id, array $fields = [] ): \SFClient\Result\SFObjectResult
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$id` | **string** |  |
| `$fields` | **array** |  |




---

### patchSocialPost



```php
Client::patchSocialPost( string $id, array $data ): \SFClient\Result\BoolResult
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$id` | **string** |  |
| `$data` | **array** |  |




---

### deleteSocialPost



```php
Client::deleteSocialPost( string $id ): \SFClient\Result\BoolResult
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$id` | **string** |  |




---

### createTask



```php
Client::createTask( array $data ): \SFClient\Result\SFCreationResult
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$data` | **array** |  |




---

### getTask



```php
Client::getTask( string $id, array $fields = [] ): \SFClient\Result\SFObjectResult
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$id` | **string** |  |
| `$fields` | **array** |  |




---

### patchTask



```php
Client::patchTask( string $id, array $data ): \SFClient\Result\BoolResult
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$id` | **string** |  |
| `$data` | **array** |  |




---

### deleteTask



```php
Client::deleteTask( string $id ): \SFClient\Result\BoolResult
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$id` | **string** |  |




---

### createUser



```php
Client::createUser( array $data ): \SFClient\Result\SFCreationResult
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$data` | **array** |  |




---

### getUser



```php
Client::getUser( string $id, array $fields = [] ): \SFClient\Result\SFObjectResult
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$id` | **string** |  |
| `$fields` | **array** |  |




---

### patchUser



```php
Client::patchUser( string $id, array $data ): \SFClient\Result\BoolResult
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$id` | **string** |  |
| `$data` | **array** |  |




---

### deleteUser



```php
Client::deleteUser( string $id ): \SFClient\Result\BoolResult
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$id` | **string** |  |




---

### createUserProvisioningRequest



```php
Client::createUserProvisioningRequest( array $data ): \SFClient\Result\SFCreationResult
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$data` | **array** |  |




---

### getUserProvisioningRequest



```php
Client::getUserProvisioningRequest( string $id, array $fields = [] ): \SFClient\Result\SFObjectResult
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$id` | **string** |  |
| `$fields` | **array** |  |




---

### patchUserProvisioningRequest



```php
Client::patchUserProvisioningRequest( string $id, array $data ): \SFClient\Result\BoolResult
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$id` | **string** |  |
| `$data` | **array** |  |




---

### deleteUserProvisioningRequest



```php
Client::deleteUserProvisioningRequest( string $id ): \SFClient\Result\BoolResult
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$id` | **string** |  |




---

### __construct

Client constructor.

```php
Client::__construct( \SFClient\SalesForce\SFAPIClient $client )
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$client` | **\SFClient\SalesForce\SFAPIClient** |  |




---

### search



```php
Client::search( string $query ): \SFClient\Result\SFRecordsResult
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$query` | **string** |  |




---

## Element

Class Element

Wrapper class for stdClass that helps make accessing arbitrary
properties safer

* Full name: \SFClient\Element


### __construct

Element constructor.

```php
Element::__construct( \stdClass $data )
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$data` | **\stdClass** |  |




---

## Endpoint

Class Endpoint

A representation of a versioned SalesForce REST API endpoint.

* Full name: \SFClient\Endpoint\Endpoint


### __construct

Endpoint constructor.

```php
Endpoint::__construct( string $baseUrl, string $version )
```

The provided SalesForce base url should omit a trailing slash. The version
should be of the form \d\d.\d and should omit the preceding 'v'.

```php
$endpoint = new Endpoint('https://company.my.salesforce.com', '10.0');

```


**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$baseUrl` | **string** |  |
| `$version` | **string** |  |




---

### getUrl

Gets the full endpoint url

```php
Endpoint::getUrl(  ): string
```







---

## FailedToAuthenticate

Class FailedToAuthenticate



* Full name: \SFClient\Exceptions\FailedToAuthenticate
* Parent class: 


## NPSPClient

Class NPSPClient

Client for interacting with the Nonprofit Success Pack package. This client
extends the functionality of the base SalesForce client by adding CRUD
support for the custom objects that are supplied by the NPSP package.

```php
$client = new NPSPClient(SFAPIClient::connect($endpoint, $auth));
```

* Full name: \SFClient\NPSPClient
* Parent class: \SFClient\Client


### createAccount



```php
NPSPClient::createAccount( array $data ): \SFClient\Result\SFCreationResult
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$data` | **array** |  |




---

### getAccount



```php
NPSPClient::getAccount( string $id, array $fields = [] ): \SFClient\Result\SFObjectResult
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$id` | **string** |  |
| `$fields` | **array** |  |




---

### patchAccount



```php
NPSPClient::patchAccount( string $id, array $data ): \SFClient\Result\BoolResult
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$id` | **string** |  |
| `$data` | **array** |  |




---

### deleteAccount



```php
NPSPClient::deleteAccount( string $id ): \SFClient\Result\BoolResult
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$id` | **string** |  |




---

### createActivity



```php
NPSPClient::createActivity( array $data ): \SFClient\Result\SFCreationResult
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$data` | **array** |  |




---

### getActivity



```php
NPSPClient::getActivity( string $id, array $fields = [] ): \SFClient\Result\SFObjectResult
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$id` | **string** |  |
| `$fields` | **array** |  |




---

### patchActivity



```php
NPSPClient::patchActivity( string $id, array $data ): \SFClient\Result\BoolResult
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$id` | **string** |  |
| `$data` | **array** |  |




---

### deleteActivity



```php
NPSPClient::deleteActivity( string $id ): \SFClient\Result\BoolResult
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$id` | **string** |  |




---

### createAddress



```php
NPSPClient::createAddress( array $data ): \SFClient\Result\SFCreationResult
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$data` | **array** |  |




---

### getAddress



```php
NPSPClient::getAddress( string $id, array $fields = [] ): \SFClient\Result\SFObjectResult
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$id` | **string** |  |
| `$fields` | **array** |  |




---

### patchAddress



```php
NPSPClient::patchAddress( string $id, array $data ): \SFClient\Result\BoolResult
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$id` | **string** |  |
| `$data` | **array** |  |




---

### deleteAddress



```php
NPSPClient::deleteAddress( string $id ): \SFClient\Result\BoolResult
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$id` | **string** |  |




---

### createAffiliation



```php
NPSPClient::createAffiliation( array $data ): \SFClient\Result\SFCreationResult
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$data` | **array** |  |




---

### getAffiliation



```php
NPSPClient::getAffiliation( string $id, array $fields = [] ): \SFClient\Result\SFObjectResult
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$id` | **string** |  |
| `$fields` | **array** |  |




---

### patchAffiliation



```php
NPSPClient::patchAffiliation( string $id, array $data ): \SFClient\Result\BoolResult
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$id` | **string** |  |
| `$data` | **array** |  |




---

### deleteAffiliation



```php
NPSPClient::deleteAffiliation( string $id ): \SFClient\Result\BoolResult
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$id` | **string** |  |




---

### createAllocation



```php
NPSPClient::createAllocation( array $data ): \SFClient\Result\SFCreationResult
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$data` | **array** |  |




---

### getAllocation



```php
NPSPClient::getAllocation( string $id, array $fields = [] ): \SFClient\Result\SFObjectResult
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$id` | **string** |  |
| `$fields` | **array** |  |




---

### patchAllocation



```php
NPSPClient::patchAllocation( string $id, array $data ): \SFClient\Result\BoolResult
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$id` | **string** |  |
| `$data` | **array** |  |




---

### deleteAllocation



```php
NPSPClient::deleteAllocation( string $id ): \SFClient\Result\BoolResult
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$id` | **string** |  |




---

### createAsset



```php
NPSPClient::createAsset( array $data ): \SFClient\Result\SFCreationResult
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$data` | **array** |  |




---

### getAsset



```php
NPSPClient::getAsset( string $id, array $fields = [] ): \SFClient\Result\SFObjectResult
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$id` | **string** |  |
| `$fields` | **array** |  |




---

### patchAsset



```php
NPSPClient::patchAsset( string $id, array $data ): \SFClient\Result\BoolResult
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$id` | **string** |  |
| `$data` | **array** |  |




---

### deleteAsset



```php
NPSPClient::deleteAsset( string $id ): \SFClient\Result\BoolResult
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$id` | **string** |  |




---

### createAssetRelationship



```php
NPSPClient::createAssetRelationship( array $data ): \SFClient\Result\SFCreationResult
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$data` | **array** |  |




---

### getAssetRelationship



```php
NPSPClient::getAssetRelationship( string $id, array $fields = [] ): \SFClient\Result\SFObjectResult
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$id` | **string** |  |
| `$fields` | **array** |  |




---

### patchAssetRelationship



```php
NPSPClient::patchAssetRelationship( string $id, array $data ): \SFClient\Result\BoolResult
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$id` | **string** |  |
| `$data` | **array** |  |




---

### deleteAssetRelationship



```php
NPSPClient::deleteAssetRelationship( string $id ): \SFClient\Result\BoolResult
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$id` | **string** |  |




---

### createBatch



```php
NPSPClient::createBatch( array $data ): \SFClient\Result\SFCreationResult
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$data` | **array** |  |




---

### getBatch



```php
NPSPClient::getBatch( string $id, array $fields = [] ): \SFClient\Result\SFObjectResult
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$id` | **string** |  |
| `$fields` | **array** |  |




---

### patchBatch



```php
NPSPClient::patchBatch( string $id, array $data ): \SFClient\Result\BoolResult
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$id` | **string** |  |
| `$data` | **array** |  |




---

### deleteBatch



```php
NPSPClient::deleteBatch( string $id ): \SFClient\Result\BoolResult
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$id` | **string** |  |




---

### createCampaign



```php
NPSPClient::createCampaign( array $data ): \SFClient\Result\SFCreationResult
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$data` | **array** |  |




---

### getCampaign



```php
NPSPClient::getCampaign( string $id, array $fields = [] ): \SFClient\Result\SFObjectResult
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$id` | **string** |  |
| `$fields` | **array** |  |




---

### patchCampaign



```php
NPSPClient::patchCampaign( string $id, array $data ): \SFClient\Result\BoolResult
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$id` | **string** |  |
| `$data` | **array** |  |




---

### deleteCampaign



```php
NPSPClient::deleteCampaign( string $id ): \SFClient\Result\BoolResult
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$id` | **string** |  |




---

### createCampaignMember



```php
NPSPClient::createCampaignMember( array $data ): \SFClient\Result\SFCreationResult
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$data` | **array** |  |




---

### getCampaignMember



```php
NPSPClient::getCampaignMember( string $id, array $fields = [] ): \SFClient\Result\SFObjectResult
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$id` | **string** |  |
| `$fields` | **array** |  |




---

### patchCampaignMember



```php
NPSPClient::patchCampaignMember( string $id, array $data ): \SFClient\Result\BoolResult
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$id` | **string** |  |
| `$data` | **array** |  |




---

### deleteCampaignMember



```php
NPSPClient::deleteCampaignMember( string $id ): \SFClient\Result\BoolResult
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$id` | **string** |  |




---

### createCase



```php
NPSPClient::createCase( array $data ): \SFClient\Result\SFCreationResult
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$data` | **array** |  |




---

### getCase



```php
NPSPClient::getCase( string $id, array $fields = [] ): \SFClient\Result\SFObjectResult
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$id` | **string** |  |
| `$fields` | **array** |  |




---

### patchCase



```php
NPSPClient::patchCase( string $id, array $data ): \SFClient\Result\BoolResult
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$id` | **string** |  |
| `$data` | **array** |  |




---

### deleteCase



```php
NPSPClient::deleteCase( string $id ): \SFClient\Result\BoolResult
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$id` | **string** |  |




---

### createContact



```php
NPSPClient::createContact( array $data ): \SFClient\Result\SFCreationResult
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$data` | **array** |  |




---

### getContact



```php
NPSPClient::getContact( string $id, array $fields = [] ): \SFClient\Result\SFObjectResult
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$id` | **string** |  |
| `$fields` | **array** |  |




---

### patchContact



```php
NPSPClient::patchContact( string $id, array $data ): \SFClient\Result\BoolResult
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$id` | **string** |  |
| `$data` | **array** |  |




---

### deleteContact



```php
NPSPClient::deleteContact( string $id ): \SFClient\Result\BoolResult
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$id` | **string** |  |




---

### createContentVersion



```php
NPSPClient::createContentVersion( array $data ): \SFClient\Result\SFCreationResult
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$data` | **array** |  |




---

### getContentVersion



```php
NPSPClient::getContentVersion( string $id, array $fields = [] ): \SFClient\Result\SFObjectResult
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$id` | **string** |  |
| `$fields` | **array** |  |




---

### patchContentVersion



```php
NPSPClient::patchContentVersion( string $id, array $data ): \SFClient\Result\BoolResult
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$id` | **string** |  |
| `$data` | **array** |  |




---

### deleteContentVersion



```php
NPSPClient::deleteContentVersion( string $id ): \SFClient\Result\BoolResult
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$id` | **string** |  |




---

### createContract



```php
NPSPClient::createContract( array $data ): \SFClient\Result\SFCreationResult
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$data` | **array** |  |




---

### getContract



```php
NPSPClient::getContract( string $id, array $fields = [] ): \SFClient\Result\SFObjectResult
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$id` | **string** |  |
| `$fields` | **array** |  |




---

### patchContract



```php
NPSPClient::patchContract( string $id, array $data ): \SFClient\Result\BoolResult
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$id` | **string** |  |
| `$data` | **array** |  |




---

### deleteContract



```php
NPSPClient::deleteContract( string $id ): \SFClient\Result\BoolResult
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$id` | **string** |  |




---

### createContractContactRole



```php
NPSPClient::createContractContactRole( array $data ): \SFClient\Result\SFCreationResult
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$data` | **array** |  |




---

### getContractContactRole



```php
NPSPClient::getContractContactRole( string $id, array $fields = [] ): \SFClient\Result\SFObjectResult
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$id` | **string** |  |
| `$fields` | **array** |  |




---

### patchContractContactRole



```php
NPSPClient::patchContractContactRole( string $id, array $data ): \SFClient\Result\BoolResult
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$id` | **string** |  |
| `$data` | **array** |  |




---

### deleteContractContactRole



```php
NPSPClient::deleteContractContactRole( string $id ): \SFClient\Result\BoolResult
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$id` | **string** |  |




---

### createDataImport



```php
NPSPClient::createDataImport( array $data ): \SFClient\Result\SFCreationResult
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$data` | **array** |  |




---

### getDataImport



```php
NPSPClient::getDataImport( string $id, array $fields = [] ): \SFClient\Result\SFObjectResult
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$id` | **string** |  |
| `$fields` | **array** |  |




---

### patchDataImport



```php
NPSPClient::patchDataImport( string $id, array $data ): \SFClient\Result\BoolResult
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$id` | **string** |  |
| `$data` | **array** |  |




---

### deleteDataImport



```php
NPSPClient::deleteDataImport( string $id ): \SFClient\Result\BoolResult
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$id` | **string** |  |




---

### createDataImportBatch



```php
NPSPClient::createDataImportBatch( array $data ): \SFClient\Result\SFCreationResult
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$data` | **array** |  |




---

### getDataImportBatch



```php
NPSPClient::getDataImportBatch( string $id, array $fields = [] ): \SFClient\Result\SFObjectResult
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$id` | **string** |  |
| `$fields` | **array** |  |




---

### patchDataImportBatch



```php
NPSPClient::patchDataImportBatch( string $id, array $data ): \SFClient\Result\BoolResult
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$id` | **string** |  |
| `$data` | **array** |  |




---

### deleteDataImportBatch



```php
NPSPClient::deleteDataImportBatch( string $id ): \SFClient\Result\BoolResult
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$id` | **string** |  |




---

### createDuplicateRecordItem



```php
NPSPClient::createDuplicateRecordItem( array $data ): \SFClient\Result\SFCreationResult
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$data` | **array** |  |




---

### getDuplicateRecordItem



```php
NPSPClient::getDuplicateRecordItem( string $id, array $fields = [] ): \SFClient\Result\SFObjectResult
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$id` | **string** |  |
| `$fields` | **array** |  |




---

### patchDuplicateRecordItem



```php
NPSPClient::patchDuplicateRecordItem( string $id, array $data ): \SFClient\Result\BoolResult
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$id` | **string** |  |
| `$data` | **array** |  |




---

### deleteDuplicateRecordItem



```php
NPSPClient::deleteDuplicateRecordItem( string $id ): \SFClient\Result\BoolResult
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$id` | **string** |  |




---

### createDuplicateRecordSet



```php
NPSPClient::createDuplicateRecordSet( array $data ): \SFClient\Result\SFCreationResult
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$data` | **array** |  |




---

### getDuplicateRecordSet



```php
NPSPClient::getDuplicateRecordSet( string $id, array $fields = [] ): \SFClient\Result\SFObjectResult
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$id` | **string** |  |
| `$fields` | **array** |  |




---

### patchDuplicateRecordSet



```php
NPSPClient::patchDuplicateRecordSet( string $id, array $data ): \SFClient\Result\BoolResult
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$id` | **string** |  |
| `$data` | **array** |  |




---

### deleteDuplicateRecordSet



```php
NPSPClient::deleteDuplicateRecordSet( string $id ): \SFClient\Result\BoolResult
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$id` | **string** |  |




---

### createEmailMessage



```php
NPSPClient::createEmailMessage( array $data ): \SFClient\Result\SFCreationResult
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$data` | **array** |  |




---

### getEmailMessage



```php
NPSPClient::getEmailMessage( string $id, array $fields = [] ): \SFClient\Result\SFObjectResult
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$id` | **string** |  |
| `$fields` | **array** |  |




---

### patchEmailMessage



```php
NPSPClient::patchEmailMessage( string $id, array $data ): \SFClient\Result\BoolResult
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$id` | **string** |  |
| `$data` | **array** |  |




---

### deleteEmailMessage



```php
NPSPClient::deleteEmailMessage( string $id ): \SFClient\Result\BoolResult
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$id` | **string** |  |




---

### createEngagementPlan



```php
NPSPClient::createEngagementPlan( array $data ): \SFClient\Result\SFCreationResult
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$data` | **array** |  |




---

### getEngagementPlan



```php
NPSPClient::getEngagementPlan( string $id, array $fields = [] ): \SFClient\Result\SFObjectResult
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$id` | **string** |  |
| `$fields` | **array** |  |




---

### patchEngagementPlan



```php
NPSPClient::patchEngagementPlan( string $id, array $data ): \SFClient\Result\BoolResult
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$id` | **string** |  |
| `$data` | **array** |  |




---

### deleteEngagementPlan



```php
NPSPClient::deleteEngagementPlan( string $id ): \SFClient\Result\BoolResult
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$id` | **string** |  |




---

### createEngagementPlanTask



```php
NPSPClient::createEngagementPlanTask( array $data ): \SFClient\Result\SFCreationResult
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$data` | **array** |  |




---

### getEngagementPlanTask



```php
NPSPClient::getEngagementPlanTask( string $id, array $fields = [] ): \SFClient\Result\SFObjectResult
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$id` | **string** |  |
| `$fields` | **array** |  |




---

### patchEngagementPlanTask



```php
NPSPClient::patchEngagementPlanTask( string $id, array $data ): \SFClient\Result\BoolResult
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$id` | **string** |  |
| `$data` | **array** |  |




---

### deleteEngagementPlanTask



```php
NPSPClient::deleteEngagementPlanTask( string $id ): \SFClient\Result\BoolResult
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$id` | **string** |  |




---

### createEngagementPlanTemplate



```php
NPSPClient::createEngagementPlanTemplate( array $data ): \SFClient\Result\SFCreationResult
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$data` | **array** |  |




---

### getEngagementPlanTemplate



```php
NPSPClient::getEngagementPlanTemplate( string $id, array $fields = [] ): \SFClient\Result\SFObjectResult
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$id` | **string** |  |
| `$fields` | **array** |  |




---

### patchEngagementPlanTemplate



```php
NPSPClient::patchEngagementPlanTemplate( string $id, array $data ): \SFClient\Result\BoolResult
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$id` | **string** |  |
| `$data` | **array** |  |




---

### deleteEngagementPlanTemplate



```php
NPSPClient::deleteEngagementPlanTemplate( string $id ): \SFClient\Result\BoolResult
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$id` | **string** |  |




---

### createError



```php
NPSPClient::createError( array $data ): \SFClient\Result\SFCreationResult
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$data` | **array** |  |




---

### getError



```php
NPSPClient::getError( string $id, array $fields = [] ): \SFClient\Result\SFObjectResult
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$id` | **string** |  |
| `$fields` | **array** |  |




---

### patchError



```php
NPSPClient::patchError( string $id, array $data ): \SFClient\Result\BoolResult
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$id` | **string** |  |
| `$data` | **array** |  |




---

### deleteError



```php
NPSPClient::deleteError( string $id ): \SFClient\Result\BoolResult
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$id` | **string** |  |




---

### createEvent



```php
NPSPClient::createEvent( array $data ): \SFClient\Result\SFCreationResult
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$data` | **array** |  |




---

### getEvent



```php
NPSPClient::getEvent( string $id, array $fields = [] ): \SFClient\Result\SFObjectResult
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$id` | **string** |  |
| `$fields` | **array** |  |




---

### patchEvent



```php
NPSPClient::patchEvent( string $id, array $data ): \SFClient\Result\BoolResult
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$id` | **string** |  |
| `$data` | **array** |  |




---

### deleteEvent



```php
NPSPClient::deleteEvent( string $id ): \SFClient\Result\BoolResult
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$id` | **string** |  |




---

### createGeneralAccountingUnit



```php
NPSPClient::createGeneralAccountingUnit( array $data ): \SFClient\Result\SFCreationResult
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$data` | **array** |  |




---

### getGeneralAccountingUnit



```php
NPSPClient::getGeneralAccountingUnit( string $id, array $fields = [] ): \SFClient\Result\SFObjectResult
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$id` | **string** |  |
| `$fields` | **array** |  |




---

### patchGeneralAccountingUnit



```php
NPSPClient::patchGeneralAccountingUnit( string $id, array $data ): \SFClient\Result\BoolResult
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$id` | **string** |  |
| `$data` | **array** |  |




---

### deleteGeneralAccountingUnit



```php
NPSPClient::deleteGeneralAccountingUnit( string $id ): \SFClient\Result\BoolResult
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$id` | **string** |  |




---

### createGrantDeadline



```php
NPSPClient::createGrantDeadline( array $data ): \SFClient\Result\SFCreationResult
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$data` | **array** |  |




---

### getGrantDeadline



```php
NPSPClient::getGrantDeadline( string $id, array $fields = [] ): \SFClient\Result\SFObjectResult
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$id` | **string** |  |
| `$fields` | **array** |  |




---

### patchGrantDeadline



```php
NPSPClient::patchGrantDeadline( string $id, array $data ): \SFClient\Result\BoolResult
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$id` | **string** |  |
| `$data` | **array** |  |




---

### deleteGrantDeadline



```php
NPSPClient::deleteGrantDeadline( string $id ): \SFClient\Result\BoolResult
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$id` | **string** |  |




---

### createHousehold



```php
NPSPClient::createHousehold( array $data ): \SFClient\Result\SFCreationResult
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$data` | **array** |  |




---

### getHousehold



```php
NPSPClient::getHousehold( string $id, array $fields = [] ): \SFClient\Result\SFObjectResult
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$id` | **string** |  |
| `$fields` | **array** |  |




---

### patchHousehold



```php
NPSPClient::patchHousehold( string $id, array $data ): \SFClient\Result\BoolResult
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$id` | **string** |  |
| `$data` | **array** |  |




---

### deleteHousehold



```php
NPSPClient::deleteHousehold( string $id ): \SFClient\Result\BoolResult
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$id` | **string** |  |




---

### createLead



```php
NPSPClient::createLead( array $data ): \SFClient\Result\SFCreationResult
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$data` | **array** |  |




---

### getLead



```php
NPSPClient::getLead( string $id, array $fields = [] ): \SFClient\Result\SFObjectResult
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$id` | **string** |  |
| `$fields` | **array** |  |




---

### patchLead



```php
NPSPClient::patchLead( string $id, array $data ): \SFClient\Result\BoolResult
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$id` | **string** |  |
| `$data` | **array** |  |




---

### deleteLead



```php
NPSPClient::deleteLead( string $id ): \SFClient\Result\BoolResult
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$id` | **string** |  |




---

### createLevel



```php
NPSPClient::createLevel( array $data ): \SFClient\Result\SFCreationResult
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$data` | **array** |  |




---

### getLevel



```php
NPSPClient::getLevel( string $id, array $fields = [] ): \SFClient\Result\SFObjectResult
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$id` | **string** |  |
| `$fields` | **array** |  |




---

### patchLevel



```php
NPSPClient::patchLevel( string $id, array $data ): \SFClient\Result\BoolResult
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$id` | **string** |  |
| `$data` | **array** |  |




---

### deleteLevel



```php
NPSPClient::deleteLevel( string $id ): \SFClient\Result\BoolResult
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$id` | **string** |  |




---

### createMacro



```php
NPSPClient::createMacro( array $data ): \SFClient\Result\SFCreationResult
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$data` | **array** |  |




---

### getMacro



```php
NPSPClient::getMacro( string $id, array $fields = [] ): \SFClient\Result\SFObjectResult
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$id` | **string** |  |
| `$fields` | **array** |  |




---

### patchMacro



```php
NPSPClient::patchMacro( string $id, array $data ): \SFClient\Result\BoolResult
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$id` | **string** |  |
| `$data` | **array** |  |




---

### deleteMacro



```php
NPSPClient::deleteMacro( string $id ): \SFClient\Result\BoolResult
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$id` | **string** |  |




---

### createOppPayment



```php
NPSPClient::createOppPayment( array $data ): \SFClient\Result\SFCreationResult
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$data` | **array** |  |




---

### getOppPayment



```php
NPSPClient::getOppPayment( string $id, array $fields = [] ): \SFClient\Result\SFObjectResult
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$id` | **string** |  |
| `$fields` | **array** |  |




---

### patchOppPayment



```php
NPSPClient::patchOppPayment( string $id, array $data ): \SFClient\Result\BoolResult
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$id` | **string** |  |
| `$data` | **array** |  |




---

### deleteOppPayment



```php
NPSPClient::deleteOppPayment( string $id ): \SFClient\Result\BoolResult
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$id` | **string** |  |




---

### createOpportunity



```php
NPSPClient::createOpportunity( array $data ): \SFClient\Result\SFCreationResult
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$data` | **array** |  |




---

### getOpportunity



```php
NPSPClient::getOpportunity( string $id, array $fields = [] ): \SFClient\Result\SFObjectResult
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$id` | **string** |  |
| `$fields` | **array** |  |




---

### patchOpportunity



```php
NPSPClient::patchOpportunity( string $id, array $data ): \SFClient\Result\BoolResult
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$id` | **string** |  |
| `$data` | **array** |  |




---

### deleteOpportunity



```php
NPSPClient::deleteOpportunity( string $id ): \SFClient\Result\BoolResult
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$id` | **string** |  |




---

### createOpportunityLineItem



```php
NPSPClient::createOpportunityLineItem( array $data ): \SFClient\Result\SFCreationResult
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$data` | **array** |  |




---

### getOpportunityLineItem



```php
NPSPClient::getOpportunityLineItem( string $id, array $fields = [] ): \SFClient\Result\SFObjectResult
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$id` | **string** |  |
| `$fields` | **array** |  |




---

### patchOpportunityLineItem



```php
NPSPClient::patchOpportunityLineItem( string $id, array $data ): \SFClient\Result\BoolResult
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$id` | **string** |  |
| `$data` | **array** |  |




---

### deleteOpportunityLineItem



```php
NPSPClient::deleteOpportunityLineItem( string $id ): \SFClient\Result\BoolResult
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$id` | **string** |  |




---

### createOrder



```php
NPSPClient::createOrder( array $data ): \SFClient\Result\SFCreationResult
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$data` | **array** |  |




---

### getOrder



```php
NPSPClient::getOrder( string $id, array $fields = [] ): \SFClient\Result\SFObjectResult
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$id` | **string** |  |
| `$fields` | **array** |  |




---

### patchOrder



```php
NPSPClient::patchOrder( string $id, array $data ): \SFClient\Result\BoolResult
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$id` | **string** |  |
| `$data` | **array** |  |




---

### deleteOrder



```php
NPSPClient::deleteOrder( string $id ): \SFClient\Result\BoolResult
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$id` | **string** |  |




---

### createOrderItem



```php
NPSPClient::createOrderItem( array $data ): \SFClient\Result\SFCreationResult
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$data` | **array** |  |




---

### getOrderItem



```php
NPSPClient::getOrderItem( string $id, array $fields = [] ): \SFClient\Result\SFObjectResult
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$id` | **string** |  |
| `$fields` | **array** |  |




---

### patchOrderItem



```php
NPSPClient::patchOrderItem( string $id, array $data ): \SFClient\Result\BoolResult
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$id` | **string** |  |
| `$data` | **array** |  |




---

### deleteOrderItem



```php
NPSPClient::deleteOrderItem( string $id ): \SFClient\Result\BoolResult
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$id` | **string** |  |




---

### createPartialSoftCredit



```php
NPSPClient::createPartialSoftCredit( array $data ): \SFClient\Result\SFCreationResult
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$data` | **array** |  |




---

### getPartialSoftCredit



```php
NPSPClient::getPartialSoftCredit( string $id, array $fields = [] ): \SFClient\Result\SFObjectResult
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$id` | **string** |  |
| `$fields` | **array** |  |




---

### patchPartialSoftCredit



```php
NPSPClient::patchPartialSoftCredit( string $id, array $data ): \SFClient\Result\BoolResult
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$id` | **string** |  |
| `$data` | **array** |  |




---

### deletePartialSoftCredit



```php
NPSPClient::deletePartialSoftCredit( string $id ): \SFClient\Result\BoolResult
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$id` | **string** |  |




---

### createPricebook2



```php
NPSPClient::createPricebook2( array $data ): \SFClient\Result\SFCreationResult
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$data` | **array** |  |




---

### getPricebook2



```php
NPSPClient::getPricebook2( string $id, array $fields = [] ): \SFClient\Result\SFObjectResult
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$id` | **string** |  |
| `$fields` | **array** |  |




---

### patchPricebook2



```php
NPSPClient::patchPricebook2( string $id, array $data ): \SFClient\Result\BoolResult
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$id` | **string** |  |
| `$data` | **array** |  |




---

### deletePricebook2



```php
NPSPClient::deletePricebook2( string $id ): \SFClient\Result\BoolResult
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$id` | **string** |  |




---

### createPricebookEntry



```php
NPSPClient::createPricebookEntry( array $data ): \SFClient\Result\SFCreationResult
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$data` | **array** |  |




---

### getPricebookEntry



```php
NPSPClient::getPricebookEntry( string $id, array $fields = [] ): \SFClient\Result\SFObjectResult
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$id` | **string** |  |
| `$fields` | **array** |  |




---

### patchPricebookEntry



```php
NPSPClient::patchPricebookEntry( string $id, array $data ): \SFClient\Result\BoolResult
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$id` | **string** |  |
| `$data` | **array** |  |




---

### deletePricebookEntry



```php
NPSPClient::deletePricebookEntry( string $id ): \SFClient\Result\BoolResult
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$id` | **string** |  |




---

### createQuickText



```php
NPSPClient::createQuickText( array $data ): \SFClient\Result\SFCreationResult
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$data` | **array** |  |




---

### getQuickText



```php
NPSPClient::getQuickText( string $id, array $fields = [] ): \SFClient\Result\SFObjectResult
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$id` | **string** |  |
| `$fields` | **array** |  |




---

### patchQuickText



```php
NPSPClient::patchQuickText( string $id, array $data ): \SFClient\Result\BoolResult
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$id` | **string** |  |
| `$data` | **array** |  |




---

### deleteQuickText



```php
NPSPClient::deleteQuickText( string $id ): \SFClient\Result\BoolResult
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$id` | **string** |  |




---

### createRecurringDonation



```php
NPSPClient::createRecurringDonation( array $data ): \SFClient\Result\SFCreationResult
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$data` | **array** |  |




---

### getRecurringDonation



```php
NPSPClient::getRecurringDonation( string $id, array $fields = [] ): \SFClient\Result\SFObjectResult
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$id` | **string** |  |
| `$fields` | **array** |  |




---

### patchRecurringDonation



```php
NPSPClient::patchRecurringDonation( string $id, array $data ): \SFClient\Result\BoolResult
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$id` | **string** |  |
| `$data` | **array** |  |




---

### deleteRecurringDonation



```php
NPSPClient::deleteRecurringDonation( string $id ): \SFClient\Result\BoolResult
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$id` | **string** |  |




---

### createRelationship



```php
NPSPClient::createRelationship( array $data ): \SFClient\Result\SFCreationResult
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$data` | **array** |  |




---

### getRelationship



```php
NPSPClient::getRelationship( string $id, array $fields = [] ): \SFClient\Result\SFObjectResult
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$id` | **string** |  |
| `$fields` | **array** |  |




---

### patchRelationship



```php
NPSPClient::patchRelationship( string $id, array $data ): \SFClient\Result\BoolResult
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$id` | **string** |  |
| `$data` | **array** |  |




---

### deleteRelationship



```php
NPSPClient::deleteRelationship( string $id ): \SFClient\Result\BoolResult
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$id` | **string** |  |




---

### createScorecard



```php
NPSPClient::createScorecard( array $data ): \SFClient\Result\SFCreationResult
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$data` | **array** |  |




---

### getScorecard



```php
NPSPClient::getScorecard( string $id, array $fields = [] ): \SFClient\Result\SFObjectResult
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$id` | **string** |  |
| `$fields` | **array** |  |




---

### patchScorecard



```php
NPSPClient::patchScorecard( string $id, array $data ): \SFClient\Result\BoolResult
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$id` | **string** |  |
| `$data` | **array** |  |




---

### deleteScorecard



```php
NPSPClient::deleteScorecard( string $id ): \SFClient\Result\BoolResult
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$id` | **string** |  |




---

### createScorecardAssociation



```php
NPSPClient::createScorecardAssociation( array $data ): \SFClient\Result\SFCreationResult
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$data` | **array** |  |




---

### getScorecardAssociation



```php
NPSPClient::getScorecardAssociation( string $id, array $fields = [] ): \SFClient\Result\SFObjectResult
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$id` | **string** |  |
| `$fields` | **array** |  |




---

### patchScorecardAssociation



```php
NPSPClient::patchScorecardAssociation( string $id, array $data ): \SFClient\Result\BoolResult
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$id` | **string** |  |
| `$data` | **array** |  |




---

### deleteScorecardAssociation



```php
NPSPClient::deleteScorecardAssociation( string $id ): \SFClient\Result\BoolResult
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$id` | **string** |  |




---

### createScorecardMetric



```php
NPSPClient::createScorecardMetric( array $data ): \SFClient\Result\SFCreationResult
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$data` | **array** |  |




---

### getScorecardMetric



```php
NPSPClient::getScorecardMetric( string $id, array $fields = [] ): \SFClient\Result\SFObjectResult
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$id` | **string** |  |
| `$fields` | **array** |  |




---

### patchScorecardMetric



```php
NPSPClient::patchScorecardMetric( string $id, array $data ): \SFClient\Result\BoolResult
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$id` | **string** |  |
| `$data` | **array** |  |




---

### deleteScorecardMetric



```php
NPSPClient::deleteScorecardMetric( string $id ): \SFClient\Result\BoolResult
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$id` | **string** |  |




---

### createSignupRequest



```php
NPSPClient::createSignupRequest( array $data ): \SFClient\Result\SFCreationResult
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$data` | **array** |  |




---

### getSignupRequest



```php
NPSPClient::getSignupRequest( string $id, array $fields = [] ): \SFClient\Result\SFObjectResult
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$id` | **string** |  |
| `$fields` | **array** |  |




---

### patchSignupRequest



```php
NPSPClient::patchSignupRequest( string $id, array $data ): \SFClient\Result\BoolResult
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$id` | **string** |  |
| `$data` | **array** |  |




---

### deleteSignupRequest



```php
NPSPClient::deleteSignupRequest( string $id ): \SFClient\Result\BoolResult
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$id` | **string** |  |




---

### createSocialPersona



```php
NPSPClient::createSocialPersona( array $data ): \SFClient\Result\SFCreationResult
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$data` | **array** |  |




---

### getSocialPersona



```php
NPSPClient::getSocialPersona( string $id, array $fields = [] ): \SFClient\Result\SFObjectResult
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$id` | **string** |  |
| `$fields` | **array** |  |




---

### patchSocialPersona



```php
NPSPClient::patchSocialPersona( string $id, array $data ): \SFClient\Result\BoolResult
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$id` | **string** |  |
| `$data` | **array** |  |




---

### deleteSocialPersona



```php
NPSPClient::deleteSocialPersona( string $id ): \SFClient\Result\BoolResult
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$id` | **string** |  |




---

### createSocialPost



```php
NPSPClient::createSocialPost( array $data ): \SFClient\Result\SFCreationResult
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$data` | **array** |  |




---

### getSocialPost



```php
NPSPClient::getSocialPost( string $id, array $fields = [] ): \SFClient\Result\SFObjectResult
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$id` | **string** |  |
| `$fields` | **array** |  |




---

### patchSocialPost



```php
NPSPClient::patchSocialPost( string $id, array $data ): \SFClient\Result\BoolResult
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$id` | **string** |  |
| `$data` | **array** |  |




---

### deleteSocialPost



```php
NPSPClient::deleteSocialPost( string $id ): \SFClient\Result\BoolResult
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$id` | **string** |  |




---

### createTask



```php
NPSPClient::createTask( array $data ): \SFClient\Result\SFCreationResult
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$data` | **array** |  |




---

### getTask



```php
NPSPClient::getTask( string $id, array $fields = [] ): \SFClient\Result\SFObjectResult
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$id` | **string** |  |
| `$fields` | **array** |  |




---

### patchTask



```php
NPSPClient::patchTask( string $id, array $data ): \SFClient\Result\BoolResult
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$id` | **string** |  |
| `$data` | **array** |  |




---

### deleteTask



```php
NPSPClient::deleteTask( string $id ): \SFClient\Result\BoolResult
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$id` | **string** |  |




---

### createTriggerHandler



```php
NPSPClient::createTriggerHandler( array $data ): \SFClient\Result\SFCreationResult
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$data` | **array** |  |




---

### getTriggerHandler



```php
NPSPClient::getTriggerHandler( string $id, array $fields = [] ): \SFClient\Result\SFObjectResult
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$id` | **string** |  |
| `$fields` | **array** |  |




---

### patchTriggerHandler



```php
NPSPClient::patchTriggerHandler( string $id, array $data ): \SFClient\Result\BoolResult
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$id` | **string** |  |
| `$data` | **array** |  |




---

### deleteTriggerHandler



```php
NPSPClient::deleteTriggerHandler( string $id ): \SFClient\Result\BoolResult
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$id` | **string** |  |




---

### createUser



```php
NPSPClient::createUser( array $data ): \SFClient\Result\SFCreationResult
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$data` | **array** |  |




---

### getUser



```php
NPSPClient::getUser( string $id, array $fields = [] ): \SFClient\Result\SFObjectResult
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$id` | **string** |  |
| `$fields` | **array** |  |




---

### patchUser



```php
NPSPClient::patchUser( string $id, array $data ): \SFClient\Result\BoolResult
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$id` | **string** |  |
| `$data` | **array** |  |




---

### deleteUser



```php
NPSPClient::deleteUser( string $id ): \SFClient\Result\BoolResult
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$id` | **string** |  |




---

### createUserProvisioningRequest



```php
NPSPClient::createUserProvisioningRequest( array $data ): \SFClient\Result\SFCreationResult
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$data` | **array** |  |




---

### getUserProvisioningRequest



```php
NPSPClient::getUserProvisioningRequest( string $id, array $fields = [] ): \SFClient\Result\SFObjectResult
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$id` | **string** |  |
| `$fields` | **array** |  |




---

### patchUserProvisioningRequest



```php
NPSPClient::patchUserProvisioningRequest( string $id, array $data ): \SFClient\Result\BoolResult
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$id` | **string** |  |
| `$data` | **array** |  |




---

### deleteUserProvisioningRequest



```php
NPSPClient::deleteUserProvisioningRequest( string $id ): \SFClient\Result\BoolResult
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$id` | **string** |  |




---

### createAccount



```php
NPSPClient::createAccount( array $data ): \SFClient\Result\SFCreationResult
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$data` | **array** |  |




---

### getAccount



```php
NPSPClient::getAccount( string $id, array $fields = [] ): \SFClient\Result\SFObjectResult
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$id` | **string** |  |
| `$fields` | **array** |  |




---

### patchAccount



```php
NPSPClient::patchAccount( string $id, array $data ): \SFClient\Result\BoolResult
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$id` | **string** |  |
| `$data` | **array** |  |




---

### deleteAccount



```php
NPSPClient::deleteAccount( string $id ): \SFClient\Result\BoolResult
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$id` | **string** |  |




---

### createActivity



```php
NPSPClient::createActivity( array $data ): \SFClient\Result\SFCreationResult
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$data` | **array** |  |




---

### getActivity



```php
NPSPClient::getActivity( string $id, array $fields = [] ): \SFClient\Result\SFObjectResult
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$id` | **string** |  |
| `$fields` | **array** |  |




---

### patchActivity



```php
NPSPClient::patchActivity( string $id, array $data ): \SFClient\Result\BoolResult
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$id` | **string** |  |
| `$data` | **array** |  |




---

### deleteActivity



```php
NPSPClient::deleteActivity( string $id ): \SFClient\Result\BoolResult
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$id` | **string** |  |




---

### createAsset



```php
NPSPClient::createAsset( array $data ): \SFClient\Result\SFCreationResult
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$data` | **array** |  |




---

### getAsset



```php
NPSPClient::getAsset( string $id, array $fields = [] ): \SFClient\Result\SFObjectResult
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$id` | **string** |  |
| `$fields` | **array** |  |




---

### patchAsset



```php
NPSPClient::patchAsset( string $id, array $data ): \SFClient\Result\BoolResult
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$id` | **string** |  |
| `$data` | **array** |  |




---

### deleteAsset



```php
NPSPClient::deleteAsset( string $id ): \SFClient\Result\BoolResult
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$id` | **string** |  |




---

### createAssetRelationship



```php
NPSPClient::createAssetRelationship( array $data ): \SFClient\Result\SFCreationResult
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$data` | **array** |  |




---

### getAssetRelationship



```php
NPSPClient::getAssetRelationship( string $id, array $fields = [] ): \SFClient\Result\SFObjectResult
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$id` | **string** |  |
| `$fields` | **array** |  |




---

### patchAssetRelationship



```php
NPSPClient::patchAssetRelationship( string $id, array $data ): \SFClient\Result\BoolResult
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$id` | **string** |  |
| `$data` | **array** |  |




---

### deleteAssetRelationship



```php
NPSPClient::deleteAssetRelationship( string $id ): \SFClient\Result\BoolResult
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$id` | **string** |  |




---

### createCampaign



```php
NPSPClient::createCampaign( array $data ): \SFClient\Result\SFCreationResult
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$data` | **array** |  |




---

### getCampaign



```php
NPSPClient::getCampaign( string $id, array $fields = [] ): \SFClient\Result\SFObjectResult
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$id` | **string** |  |
| `$fields` | **array** |  |




---

### patchCampaign



```php
NPSPClient::patchCampaign( string $id, array $data ): \SFClient\Result\BoolResult
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$id` | **string** |  |
| `$data` | **array** |  |




---

### deleteCampaign



```php
NPSPClient::deleteCampaign( string $id ): \SFClient\Result\BoolResult
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$id` | **string** |  |




---

### createCampaignMember



```php
NPSPClient::createCampaignMember( array $data ): \SFClient\Result\SFCreationResult
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$data` | **array** |  |




---

### getCampaignMember



```php
NPSPClient::getCampaignMember( string $id, array $fields = [] ): \SFClient\Result\SFObjectResult
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$id` | **string** |  |
| `$fields` | **array** |  |




---

### patchCampaignMember



```php
NPSPClient::patchCampaignMember( string $id, array $data ): \SFClient\Result\BoolResult
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$id` | **string** |  |
| `$data` | **array** |  |




---

### deleteCampaignMember



```php
NPSPClient::deleteCampaignMember( string $id ): \SFClient\Result\BoolResult
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$id` | **string** |  |




---

### createCase



```php
NPSPClient::createCase( array $data ): \SFClient\Result\SFCreationResult
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$data` | **array** |  |




---

### getCase



```php
NPSPClient::getCase( string $id, array $fields = [] ): \SFClient\Result\SFObjectResult
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$id` | **string** |  |
| `$fields` | **array** |  |




---

### patchCase



```php
NPSPClient::patchCase( string $id, array $data ): \SFClient\Result\BoolResult
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$id` | **string** |  |
| `$data` | **array** |  |




---

### deleteCase



```php
NPSPClient::deleteCase( string $id ): \SFClient\Result\BoolResult
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$id` | **string** |  |




---

### createContact



```php
NPSPClient::createContact( array $data ): \SFClient\Result\SFCreationResult
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$data` | **array** |  |




---

### getContact



```php
NPSPClient::getContact( string $id, array $fields = [] ): \SFClient\Result\SFObjectResult
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$id` | **string** |  |
| `$fields` | **array** |  |




---

### patchContact



```php
NPSPClient::patchContact( string $id, array $data ): \SFClient\Result\BoolResult
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$id` | **string** |  |
| `$data` | **array** |  |




---

### deleteContact



```php
NPSPClient::deleteContact( string $id ): \SFClient\Result\BoolResult
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$id` | **string** |  |




---

### createContentVersion



```php
NPSPClient::createContentVersion( array $data ): \SFClient\Result\SFCreationResult
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$data` | **array** |  |




---

### getContentVersion



```php
NPSPClient::getContentVersion( string $id, array $fields = [] ): \SFClient\Result\SFObjectResult
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$id` | **string** |  |
| `$fields` | **array** |  |




---

### patchContentVersion



```php
NPSPClient::patchContentVersion( string $id, array $data ): \SFClient\Result\BoolResult
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$id` | **string** |  |
| `$data` | **array** |  |




---

### deleteContentVersion



```php
NPSPClient::deleteContentVersion( string $id ): \SFClient\Result\BoolResult
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$id` | **string** |  |




---

### createContract



```php
NPSPClient::createContract( array $data ): \SFClient\Result\SFCreationResult
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$data` | **array** |  |




---

### getContract



```php
NPSPClient::getContract( string $id, array $fields = [] ): \SFClient\Result\SFObjectResult
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$id` | **string** |  |
| `$fields` | **array** |  |




---

### patchContract



```php
NPSPClient::patchContract( string $id, array $data ): \SFClient\Result\BoolResult
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$id` | **string** |  |
| `$data` | **array** |  |




---

### deleteContract



```php
NPSPClient::deleteContract( string $id ): \SFClient\Result\BoolResult
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$id` | **string** |  |




---

### createContractContactRole



```php
NPSPClient::createContractContactRole( array $data ): \SFClient\Result\SFCreationResult
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$data` | **array** |  |




---

### getContractContactRole



```php
NPSPClient::getContractContactRole( string $id, array $fields = [] ): \SFClient\Result\SFObjectResult
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$id` | **string** |  |
| `$fields` | **array** |  |




---

### patchContractContactRole



```php
NPSPClient::patchContractContactRole( string $id, array $data ): \SFClient\Result\BoolResult
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$id` | **string** |  |
| `$data` | **array** |  |




---

### deleteContractContactRole



```php
NPSPClient::deleteContractContactRole( string $id ): \SFClient\Result\BoolResult
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$id` | **string** |  |




---

### createDuplicateRecordItem



```php
NPSPClient::createDuplicateRecordItem( array $data ): \SFClient\Result\SFCreationResult
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$data` | **array** |  |




---

### getDuplicateRecordItem



```php
NPSPClient::getDuplicateRecordItem( string $id, array $fields = [] ): \SFClient\Result\SFObjectResult
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$id` | **string** |  |
| `$fields` | **array** |  |




---

### patchDuplicateRecordItem



```php
NPSPClient::patchDuplicateRecordItem( string $id, array $data ): \SFClient\Result\BoolResult
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$id` | **string** |  |
| `$data` | **array** |  |




---

### deleteDuplicateRecordItem



```php
NPSPClient::deleteDuplicateRecordItem( string $id ): \SFClient\Result\BoolResult
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$id` | **string** |  |




---

### createDuplicateRecordSet



```php
NPSPClient::createDuplicateRecordSet( array $data ): \SFClient\Result\SFCreationResult
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$data` | **array** |  |




---

### getDuplicateRecordSet



```php
NPSPClient::getDuplicateRecordSet( string $id, array $fields = [] ): \SFClient\Result\SFObjectResult
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$id` | **string** |  |
| `$fields` | **array** |  |




---

### patchDuplicateRecordSet



```php
NPSPClient::patchDuplicateRecordSet( string $id, array $data ): \SFClient\Result\BoolResult
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$id` | **string** |  |
| `$data` | **array** |  |




---

### deleteDuplicateRecordSet



```php
NPSPClient::deleteDuplicateRecordSet( string $id ): \SFClient\Result\BoolResult
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$id` | **string** |  |




---

### createEmailMessage



```php
NPSPClient::createEmailMessage( array $data ): \SFClient\Result\SFCreationResult
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$data` | **array** |  |




---

### getEmailMessage



```php
NPSPClient::getEmailMessage( string $id, array $fields = [] ): \SFClient\Result\SFObjectResult
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$id` | **string** |  |
| `$fields` | **array** |  |




---

### patchEmailMessage



```php
NPSPClient::patchEmailMessage( string $id, array $data ): \SFClient\Result\BoolResult
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$id` | **string** |  |
| `$data` | **array** |  |




---

### deleteEmailMessage



```php
NPSPClient::deleteEmailMessage( string $id ): \SFClient\Result\BoolResult
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$id` | **string** |  |




---

### createEvent



```php
NPSPClient::createEvent( array $data ): \SFClient\Result\SFCreationResult
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$data` | **array** |  |




---

### getEvent



```php
NPSPClient::getEvent( string $id, array $fields = [] ): \SFClient\Result\SFObjectResult
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$id` | **string** |  |
| `$fields` | **array** |  |




---

### patchEvent



```php
NPSPClient::patchEvent( string $id, array $data ): \SFClient\Result\BoolResult
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$id` | **string** |  |
| `$data` | **array** |  |




---

### deleteEvent



```php
NPSPClient::deleteEvent( string $id ): \SFClient\Result\BoolResult
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$id` | **string** |  |




---

### createLead



```php
NPSPClient::createLead( array $data ): \SFClient\Result\SFCreationResult
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$data` | **array** |  |




---

### getLead



```php
NPSPClient::getLead( string $id, array $fields = [] ): \SFClient\Result\SFObjectResult
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$id` | **string** |  |
| `$fields` | **array** |  |




---

### patchLead



```php
NPSPClient::patchLead( string $id, array $data ): \SFClient\Result\BoolResult
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$id` | **string** |  |
| `$data` | **array** |  |




---

### deleteLead



```php
NPSPClient::deleteLead( string $id ): \SFClient\Result\BoolResult
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$id` | **string** |  |




---

### createMacro



```php
NPSPClient::createMacro( array $data ): \SFClient\Result\SFCreationResult
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$data` | **array** |  |




---

### getMacro



```php
NPSPClient::getMacro( string $id, array $fields = [] ): \SFClient\Result\SFObjectResult
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$id` | **string** |  |
| `$fields` | **array** |  |




---

### patchMacro



```php
NPSPClient::patchMacro( string $id, array $data ): \SFClient\Result\BoolResult
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$id` | **string** |  |
| `$data` | **array** |  |




---

### deleteMacro



```php
NPSPClient::deleteMacro( string $id ): \SFClient\Result\BoolResult
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$id` | **string** |  |




---

### createOpportunity



```php
NPSPClient::createOpportunity( array $data ): \SFClient\Result\SFCreationResult
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$data` | **array** |  |




---

### getOpportunity



```php
NPSPClient::getOpportunity( string $id, array $fields = [] ): \SFClient\Result\SFObjectResult
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$id` | **string** |  |
| `$fields` | **array** |  |




---

### patchOpportunity



```php
NPSPClient::patchOpportunity( string $id, array $data ): \SFClient\Result\BoolResult
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$id` | **string** |  |
| `$data` | **array** |  |




---

### deleteOpportunity



```php
NPSPClient::deleteOpportunity( string $id ): \SFClient\Result\BoolResult
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$id` | **string** |  |




---

### createOpportunityLineItem



```php
NPSPClient::createOpportunityLineItem( array $data ): \SFClient\Result\SFCreationResult
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$data` | **array** |  |




---

### getOpportunityLineItem



```php
NPSPClient::getOpportunityLineItem( string $id, array $fields = [] ): \SFClient\Result\SFObjectResult
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$id` | **string** |  |
| `$fields` | **array** |  |




---

### patchOpportunityLineItem



```php
NPSPClient::patchOpportunityLineItem( string $id, array $data ): \SFClient\Result\BoolResult
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$id` | **string** |  |
| `$data` | **array** |  |




---

### deleteOpportunityLineItem



```php
NPSPClient::deleteOpportunityLineItem( string $id ): \SFClient\Result\BoolResult
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$id` | **string** |  |




---

### createOrder



```php
NPSPClient::createOrder( array $data ): \SFClient\Result\SFCreationResult
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$data` | **array** |  |




---

### getOrder



```php
NPSPClient::getOrder( string $id, array $fields = [] ): \SFClient\Result\SFObjectResult
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$id` | **string** |  |
| `$fields` | **array** |  |




---

### patchOrder



```php
NPSPClient::patchOrder( string $id, array $data ): \SFClient\Result\BoolResult
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$id` | **string** |  |
| `$data` | **array** |  |




---

### deleteOrder



```php
NPSPClient::deleteOrder( string $id ): \SFClient\Result\BoolResult
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$id` | **string** |  |




---

### createOrderItem



```php
NPSPClient::createOrderItem( array $data ): \SFClient\Result\SFCreationResult
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$data` | **array** |  |




---

### getOrderItem



```php
NPSPClient::getOrderItem( string $id, array $fields = [] ): \SFClient\Result\SFObjectResult
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$id` | **string** |  |
| `$fields` | **array** |  |




---

### patchOrderItem



```php
NPSPClient::patchOrderItem( string $id, array $data ): \SFClient\Result\BoolResult
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$id` | **string** |  |
| `$data` | **array** |  |




---

### deleteOrderItem



```php
NPSPClient::deleteOrderItem( string $id ): \SFClient\Result\BoolResult
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$id` | **string** |  |




---

### createPricebook2



```php
NPSPClient::createPricebook2( array $data ): \SFClient\Result\SFCreationResult
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$data` | **array** |  |




---

### getPricebook2



```php
NPSPClient::getPricebook2( string $id, array $fields = [] ): \SFClient\Result\SFObjectResult
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$id` | **string** |  |
| `$fields` | **array** |  |




---

### patchPricebook2



```php
NPSPClient::patchPricebook2( string $id, array $data ): \SFClient\Result\BoolResult
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$id` | **string** |  |
| `$data` | **array** |  |




---

### deletePricebook2



```php
NPSPClient::deletePricebook2( string $id ): \SFClient\Result\BoolResult
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$id` | **string** |  |




---

### createPricebookEntry



```php
NPSPClient::createPricebookEntry( array $data ): \SFClient\Result\SFCreationResult
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$data` | **array** |  |




---

### getPricebookEntry



```php
NPSPClient::getPricebookEntry( string $id, array $fields = [] ): \SFClient\Result\SFObjectResult
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$id` | **string** |  |
| `$fields` | **array** |  |




---

### patchPricebookEntry



```php
NPSPClient::patchPricebookEntry( string $id, array $data ): \SFClient\Result\BoolResult
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$id` | **string** |  |
| `$data` | **array** |  |




---

### deletePricebookEntry



```php
NPSPClient::deletePricebookEntry( string $id ): \SFClient\Result\BoolResult
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$id` | **string** |  |




---

### createQuickText



```php
NPSPClient::createQuickText( array $data ): \SFClient\Result\SFCreationResult
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$data` | **array** |  |




---

### getQuickText



```php
NPSPClient::getQuickText( string $id, array $fields = [] ): \SFClient\Result\SFObjectResult
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$id` | **string** |  |
| `$fields` | **array** |  |




---

### patchQuickText



```php
NPSPClient::patchQuickText( string $id, array $data ): \SFClient\Result\BoolResult
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$id` | **string** |  |
| `$data` | **array** |  |




---

### deleteQuickText



```php
NPSPClient::deleteQuickText( string $id ): \SFClient\Result\BoolResult
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$id` | **string** |  |




---

### createScorecard



```php
NPSPClient::createScorecard( array $data ): \SFClient\Result\SFCreationResult
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$data` | **array** |  |




---

### getScorecard



```php
NPSPClient::getScorecard( string $id, array $fields = [] ): \SFClient\Result\SFObjectResult
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$id` | **string** |  |
| `$fields` | **array** |  |




---

### patchScorecard



```php
NPSPClient::patchScorecard( string $id, array $data ): \SFClient\Result\BoolResult
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$id` | **string** |  |
| `$data` | **array** |  |




---

### deleteScorecard



```php
NPSPClient::deleteScorecard( string $id ): \SFClient\Result\BoolResult
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$id` | **string** |  |




---

### createScorecardAssociation



```php
NPSPClient::createScorecardAssociation( array $data ): \SFClient\Result\SFCreationResult
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$data` | **array** |  |




---

### getScorecardAssociation



```php
NPSPClient::getScorecardAssociation( string $id, array $fields = [] ): \SFClient\Result\SFObjectResult
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$id` | **string** |  |
| `$fields` | **array** |  |




---

### patchScorecardAssociation



```php
NPSPClient::patchScorecardAssociation( string $id, array $data ): \SFClient\Result\BoolResult
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$id` | **string** |  |
| `$data` | **array** |  |




---

### deleteScorecardAssociation



```php
NPSPClient::deleteScorecardAssociation( string $id ): \SFClient\Result\BoolResult
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$id` | **string** |  |




---

### createScorecardMetric



```php
NPSPClient::createScorecardMetric( array $data ): \SFClient\Result\SFCreationResult
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$data` | **array** |  |




---

### getScorecardMetric



```php
NPSPClient::getScorecardMetric( string $id, array $fields = [] ): \SFClient\Result\SFObjectResult
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$id` | **string** |  |
| `$fields` | **array** |  |




---

### patchScorecardMetric



```php
NPSPClient::patchScorecardMetric( string $id, array $data ): \SFClient\Result\BoolResult
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$id` | **string** |  |
| `$data` | **array** |  |




---

### deleteScorecardMetric



```php
NPSPClient::deleteScorecardMetric( string $id ): \SFClient\Result\BoolResult
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$id` | **string** |  |




---

### createSignupRequest



```php
NPSPClient::createSignupRequest( array $data ): \SFClient\Result\SFCreationResult
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$data` | **array** |  |




---

### getSignupRequest



```php
NPSPClient::getSignupRequest( string $id, array $fields = [] ): \SFClient\Result\SFObjectResult
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$id` | **string** |  |
| `$fields` | **array** |  |




---

### patchSignupRequest



```php
NPSPClient::patchSignupRequest( string $id, array $data ): \SFClient\Result\BoolResult
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$id` | **string** |  |
| `$data` | **array** |  |




---

### deleteSignupRequest



```php
NPSPClient::deleteSignupRequest( string $id ): \SFClient\Result\BoolResult
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$id` | **string** |  |




---

### createSocialPersona



```php
NPSPClient::createSocialPersona( array $data ): \SFClient\Result\SFCreationResult
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$data` | **array** |  |




---

### getSocialPersona



```php
NPSPClient::getSocialPersona( string $id, array $fields = [] ): \SFClient\Result\SFObjectResult
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$id` | **string** |  |
| `$fields` | **array** |  |




---

### patchSocialPersona



```php
NPSPClient::patchSocialPersona( string $id, array $data ): \SFClient\Result\BoolResult
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$id` | **string** |  |
| `$data` | **array** |  |




---

### deleteSocialPersona



```php
NPSPClient::deleteSocialPersona( string $id ): \SFClient\Result\BoolResult
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$id` | **string** |  |




---

### createSocialPost



```php
NPSPClient::createSocialPost( array $data ): \SFClient\Result\SFCreationResult
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$data` | **array** |  |




---

### getSocialPost



```php
NPSPClient::getSocialPost( string $id, array $fields = [] ): \SFClient\Result\SFObjectResult
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$id` | **string** |  |
| `$fields` | **array** |  |




---

### patchSocialPost



```php
NPSPClient::patchSocialPost( string $id, array $data ): \SFClient\Result\BoolResult
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$id` | **string** |  |
| `$data` | **array** |  |




---

### deleteSocialPost



```php
NPSPClient::deleteSocialPost( string $id ): \SFClient\Result\BoolResult
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$id` | **string** |  |




---

### createTask



```php
NPSPClient::createTask( array $data ): \SFClient\Result\SFCreationResult
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$data` | **array** |  |




---

### getTask



```php
NPSPClient::getTask( string $id, array $fields = [] ): \SFClient\Result\SFObjectResult
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$id` | **string** |  |
| `$fields` | **array** |  |




---

### patchTask



```php
NPSPClient::patchTask( string $id, array $data ): \SFClient\Result\BoolResult
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$id` | **string** |  |
| `$data` | **array** |  |




---

### deleteTask



```php
NPSPClient::deleteTask( string $id ): \SFClient\Result\BoolResult
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$id` | **string** |  |




---

### createUser



```php
NPSPClient::createUser( array $data ): \SFClient\Result\SFCreationResult
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$data` | **array** |  |




---

### getUser



```php
NPSPClient::getUser( string $id, array $fields = [] ): \SFClient\Result\SFObjectResult
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$id` | **string** |  |
| `$fields` | **array** |  |




---

### patchUser



```php
NPSPClient::patchUser( string $id, array $data ): \SFClient\Result\BoolResult
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$id` | **string** |  |
| `$data` | **array** |  |




---

### deleteUser



```php
NPSPClient::deleteUser( string $id ): \SFClient\Result\BoolResult
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$id` | **string** |  |




---

### createUserProvisioningRequest



```php
NPSPClient::createUserProvisioningRequest( array $data ): \SFClient\Result\SFCreationResult
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$data` | **array** |  |




---

### getUserProvisioningRequest



```php
NPSPClient::getUserProvisioningRequest( string $id, array $fields = [] ): \SFClient\Result\SFObjectResult
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$id` | **string** |  |
| `$fields` | **array** |  |




---

### patchUserProvisioningRequest



```php
NPSPClient::patchUserProvisioningRequest( string $id, array $data ): \SFClient\Result\BoolResult
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$id` | **string** |  |
| `$data` | **array** |  |




---

### deleteUserProvisioningRequest



```php
NPSPClient::deleteUserProvisioningRequest( string $id ): \SFClient\Result\BoolResult
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$id` | **string** |  |




---

### __construct

NPSPClient constructor.

```php
NPSPClient::__construct( \SFClient\SalesForce\SFAPIClient $client )
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$client` | **\SFClient\SalesForce\SFAPIClient** |  |




---

### search



```php
NPSPClient::search( string $query ): \SFClient\Result\SFRecordsResult
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$query` | **string** |  |




---

## Result

Class Result

A successful or failure to perform some operation. Used as an alternative
to raising exceptions when needing to propagate errors.

* Full name: \SFClient\Result\Result


### ok

Constructs a successful result of some type T.

```php
Result::ok( mixed $value ): \SFClient\Result\Result
```



* This method is **static**.
**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$value` | **mixed** | The success value |




---

### err

Constructs a failure result of some error type E. To construct a failure
an exception must be supplied.

```php
Result::err( \Exception $err ): \SFClient\Result\Result
```



* This method is **static**.
**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$err` | **\Exception** | The failure error |




---

### isError

Returns true if the result is a failure

```php
Result::isError(  ): boolean
```







---

### isOk

Returns true if the result is a success

```php
Result::isOk(  ): boolean
```







---

### value

Attempts to extract and return the success value.

```php
Result::value(  ): mixed
```

If the result was a success then the value is returned. If the result was
a failure then calling this method will throw the exception that is stored.

```php
$resultA = Result::ok("foo");
echo $resultA->value(); // foo

$resultB = Result::err(new \Exception("Bar error");
echo $resultB->value(); // PHP Fatal error:  Uncaught exception ...
```

To safely handle a result and extract its value the caller can use either
conditionals or try / catch syntax

```php
$resultA = Result::ok("foo");

if ($resultA->isOk()) {
  echo $result->value(); // foo
} else {
  // ...
}

$resultB = Result::err(new \Exception("Bar error");

try {
  echo $resultB->value();
} catch (\Exception $e) {
  echo $e->getMessage(); // Bar error
}
```





---

### getErr

Returns the inner error of a failure. This returns null if the result is
a success.

```php
Result::getErr(  ): \Exception|null
```







---

### valueOr

Returns the success value if the result was a success. If the result was a
failure, then instead of throwing the inner error the fallback value is
returned.

```php
Result::valueOr( mixed $fallback ): mixed
```

```php
$resultA = Result::ok("alpha");
echo $resultA->valueOr("beta"); // alpha

$resultB = Result::err(new \Exception("delta error");
echo $resultB->valueOr("gamma"); // gamma
```


**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$fallback` | **mixed** |  |




---

## ScopedSFAPIClient

Class ScopedSFAPIClient

A SalesForce API client that is scoped down to a specific SalesForce object
type. The scoped clients wraps an existing SalesForce API client meaning that
calls to the scoped client are passed on to the SalesForce API client that
was used to construct the scoped client.

This can be useful when needing to pass to an external system, a client that
has reduced capabilities.

```php
$accounts = new ScopedSFAPIClient($sfClient, 'Account');

perform_account_logic($accounts);

```

* Full name: \SFClient\SalesForce\ScopedSFAPIClient


### __construct

Creates a SalesForce API client scoped to a particular object type.

```php
ScopedSFAPIClient::__construct( \GuzzleHttp\Client $client, string $objectScope )
```

ScopedSFClient constructor.


**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$client` | **\GuzzleHttp\Client** | SalesForce API client to wrap |
| `$objectScope` | **string** | Object type to query against |




---

### getScope

Returns the object type scope that is applied to this client

```php
ScopedSFAPIClient::getScope(  ): string
```







---

### create



```php
ScopedSFAPIClient::create( array $data ): \SFClient\Result\SFCreationResult
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$data` | **array** |  |



**See Also:**

* \SFClient\SalesForce\SFAPIClient::create() 

---

### get



```php
ScopedSFAPIClient::get( string $id, array $fields = array() ): \SFClient\Result\SFObjectResult
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$id` | **string** |  |
| `$fields` | **array** |  |



**See Also:**

* \SFClient\SalesForce\SFAPIClient::get() 

---

### patch



```php
ScopedSFAPIClient::patch( string $id, array $data ): \SFClient\Result\BoolResult
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$id` | **string** |  |
| `$data` | **array** |  |



**See Also:**

* \SFClient\SalesForce\SFAPIClient::patch() 

---

### delete



```php
ScopedSFAPIClient::delete( string $id ): \SFClient\Result\BoolResult
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$id` | **string** |  |



**See Also:**

* \SFClient\SalesForce\SFAPIClient::delete() 

---

## SFAPIClient

Class SFAPIClient

A general purpose client for communicating with the SalesForce API. This
client only implements the base functionality for handling CRUD operations as
where as arbitrary query execution.

On construction a client will attempt to authenticate against the supplied
SalesForce endpoint immediately. An exception will be thrown if this call
is not successful. At this point the returned token is stored for later use,
and the credentials for authentication are thrown away.

The client will not attempt to re-authenticate if later API calls generate
authentication failures. If the client is left in use by a long running
process that outlives the lifetime of the access token, then this case may
occur. It is left to the consumer of the client to handle these cases.

* Full name: \SFClient\SalesForce\SFAPIClient


### connect

Constructs a new SalesForce API client with a given SalesForce API endpoint
and authentication mechanism.

```php
SFAPIClient::connect( \SFClient\Endpoint\Endpoint $endpoint, \SFClient\Auth\Authentication $auth ): \SFClient\SalesForce\SFAPIClient
```



* This method is **static**.
**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$endpoint` | **\SFClient\Endpoint\Endpoint** | SalesForce endpoint to make calls against |
| `$auth` | **\SFClient\Auth\Authentication** | SalesForce authentication mechanism |




---

### connectWith

Constructs a new SalesForce API client with a custom Http client and the
given authentication mechanism.

```php
SFAPIClient::connectWith( \GuzzleHttp\Client $client, \SFClient\Auth\Authentication $auth ): \SFClient\SalesForce\SFAPIClient
```

It is expected that the caller has correctly configured the Http client
ahead of time with the appropriate
SalesForce base endpoint url.
```php
$auth = new PasswordAuth(
  'key',
  'secret',
  'user',
  'pass'
);

$client = new Client([
  'base_uri' => 'https://my.endpoint.salesforce.com/services/data/v12.3/'
]);

$sfClient = SFAPIClient::connectWith($client, $auth);
```

* This method is **static**.
**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$client` | **\GuzzleHttp\Client** | Http client that will be used by the SFAPIClient to communicate with the SalesForce API |
| `$auth` | **\SFClient\Auth\Authentication** | SalesForce authentication mechanism |




---

### scope

Constructs a new SalesForce API client that is scoped to a specific object
type.

```php
SFAPIClient::scope( string $objectType ): \SFClient\SalesForce\ScopedSFAPIClient
```

Note that this re-uses the Http client of the SalesForce API client
that was used to create the scoped client. Object types passed to the
method are not validated in any way.
```php
$contacts = $client->scope('Contact');
```


**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$objectType` | **string** | SalesForce object type to create a client for |




---

### create

Performs a create operation for a given type.

```php
SFAPIClient::create( string $objectType, array $data ): \SFClient\Result\SFCreationResult
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$objectType` | **string** | SalesForce object type to create |
| `$data` | **array** | Field data to create the object with |




---

### get

Fetches a single object of a given type.

```php
SFAPIClient::get( string $objectType, string $id, array $fields = array() ): \SFClient\Result\SFObjectResult
```

The optional `$fields` argument may be used to restrict the fields that
are returned. By default all fields are returned.


**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$objectType` | **string** | SalesForce object type to query for |
| `$id` | **string** | SalesForce object id to query for |
| `$fields` | **array** | SalesForce fields to return |




---

### patch

Updates a single object of a given type with the given id.

```php
SFAPIClient::patch( string $objectType, string $id, array $data ): \SFClient\Result\BoolResult
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$objectType` | **string** | SalesForce object type to update |
| `$id` | **string** | SalesForce id type to update |
| `$data` | **array** | Field data to update the object with |




---

### delete

Deletes a single object of a given type with the given id.

```php
SFAPIClient::delete( string $objectType, string $id ): \SFClient\Result\BoolResult
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$objectType` | **string** | SalesForce object type to delete |
| `$id` | **string** | SalesForce id type to delete |




---

### query

Performs an arbitrary query against the SalesForce query endpoint and
returns the results.

```php
SFAPIClient::query( string $query ): \SFClient\Result\SFRecordsResult
```

The results returned may not represent all of the objects in SalesForce
that match the given query. Records up to the limit set by SalesForce are
returned.

This method runs the provided query as-is and does not perform validation
or sanitizion. Consumers of the client should handle these operations prior
to passing the query to the client.


**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$query` | **string** | A SOQL query to run |




---

## SFCreation

Class SFCreation

Represents an object create response from SalesForce.

* Full name: \SFClient\SalesForce\SFCreation


### __construct

SFCreation constructor.

```php
SFCreation::__construct( \stdClass $data )
```

Requires the $data argument to contain specific properties:
* string id
* bool success
* array errors


**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$data` | **\stdClass** | A successful create response object from SalesForce |




---

### getId



```php
SFCreation::getId(  ): string
```







---

### wasSuccessful



```php
SFCreation::wasSuccessful(  ): boolean
```







---

### getErrors



```php
SFCreation::getErrors(  ): array
```







---

## SFCreationResult

Class SFCreationResult



* Full name: \SFClient\Result\SFCreationResult


### __construct

SFCreation constructor.

```php
SFCreationResult::__construct( \SFClient\Result\Result $res )
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$res` | **\SFClient\Result\Result** |  |




---

### ok



```php
SFCreationResult::ok( \SFClient\SalesForce\SFCreation $value ): \SFClient\Result\SFCreationResult
```



* This method is **static**.
**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$value` | **\SFClient\SalesForce\SFCreation** |  |



**See Also:**

* \SFClient\Result\Result::ok() 

---

### err



```php
SFCreationResult::err( \Exception $err ): \SFClient\Result\SFCreationResult
```



* This method is **static**.
**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$err` | **\Exception** |  |



**See Also:**

* \SFClient\Result\Result::err() 

---

### isOk



```php
SFCreationResult::isOk(  ): boolean
```






**See Also:**

* \SFClient\Result\Result::isOk() 

---

### isError



```php
SFCreationResult::isError(  ): boolean
```






**See Also:**

* \SFClient\Result\Result::isError() 

---

### value



```php
SFCreationResult::value(  ): \SFClient\SalesForce\SFCreation
```






**See Also:**

* \SFClient\Result\Result::value() 

---

### getErr



```php
SFCreationResult::getErr(  ): \Exception
```






**See Also:**

* \SFClient\Result\Result::getErr() 

---

### valueOr



```php
SFCreationResult::valueOr(  $fallback ): mixed
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$fallback` | **** |  |



**See Also:**

* \SFClient\Result\Result::valueOr() 

---

## SFObject

Class SFObject

Wrapper class for stdClass that helps make accessing arbitrary
properties safer

* Full name: \SFClient\SalesForce\SFObject
* Parent class: \SFClient\Element

**See Also:**

* \SFClient\SalesForce\Element 

### __construct

Element constructor.

```php
SFObject::__construct( \stdClass $data )
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$data` | **\stdClass** |  |




---

## SFRecords

Class SFRecords

A collection of SalesForce Objects. This collection may only contain a
partial set of the total objects in SalesForce.

* Full name: \SFClient\SalesForce\SFRecords


### __construct

SFRecords constructor.

```php
SFRecords::__construct( \stdClass $data )
```

Requires the $data argument to contain specific properties:
* int totalSize
* bool done
* array records


**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$data` | **\stdClass** | A successful response object from SalesForce |




---

### getTotal

Returns the total number of objects in SalesForce that this partial
collection was taken from.

```php
SFRecords::getTotal(  ): integer
```







---

### hasMore

Returns true if there are more objects in SalesForce to fetch.

```php
SFRecords::hasMore(  ): boolean
```







---

### getRecords

Returns an array of SFObjects representing records returned by the
SalesForce API.

```php
SFRecords::getRecords(  ): array&lt;mixed,\SFClient\SalesForce\SFObject&gt;
```







---

## SFRecordsResult

Class SFRecordsResult



* Full name: \SFClient\Result\SFRecordsResult


### __construct

SFRecords constructor.

```php
SFRecordsResult::__construct( \SFClient\Result\Result $res )
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$res` | **\SFClient\Result\Result** |  |




---

### ok



```php
SFRecordsResult::ok( \SFClient\SalesForce\SFRecords $value ): \SFClient\Result\SFRecordsResult
```



* This method is **static**.
**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$value` | **\SFClient\SalesForce\SFRecords** |  |



**See Also:**

* \SFClient\Result\Result::ok() 

---

### err



```php
SFRecordsResult::err( \Exception $err ): \SFClient\Result\SFRecordsResult
```



* This method is **static**.
**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$err` | **\Exception** |  |



**See Also:**

* \SFClient\Result\Result::err() 

---

### isOk



```php
SFRecordsResult::isOk(  ): boolean
```






**See Also:**

* \SFClient\Result\Result::isOk() 

---

### isError



```php
SFRecordsResult::isError(  ): boolean
```






**See Also:**

* \SFClient\Result\Result::isError() 

---

### value



```php
SFRecordsResult::value(  ): \SFClient\SalesForce\SFRecords
```






**See Also:**

* \SFClient\Result\Result::value() 

---

### getErr



```php
SFRecordsResult::getErr(  ): \Exception
```






**See Also:**

* \SFClient\Result\Result::getErr() 

---

### valueOr



```php
SFRecordsResult::valueOr(  $fallback ): mixed
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$fallback` | **** |  |



**See Also:**

* \SFClient\Result\Result::valueOr() 

---



--------
> This document was automatically generated from source code comments on 2018-11-17 using [phpDocumentor](http://www.phpdoc.org/) and [cvuorinen/phpdoc-markdown-public](https://github.com/cvuorinen/phpdoc-markdown-public)
