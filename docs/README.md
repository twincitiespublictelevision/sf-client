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
* [Element](#element)
    * [__construct](#__construct-1)
* [Endpoint](#endpoint)
    * [__construct](#__construct-2)
    * [getUrl](#geturl)
* [FailedToAuthenticate](#failedtoauthenticate)
* [NPSPClient](#npspclient)
    * [createAccount](#createaccount)
    * [getAccount](#getaccount)
    * [patchAccount](#patchaccount)
    * [deleteAccount](#deleteaccount)
    * [createActivity](#createactivity)
    * [getActivity](#getactivity)
    * [patchActivity](#patchactivity)
    * [deleteActivity](#deleteactivity)
    * [createAddress](#createaddress)
    * [getAddress](#getaddress)
    * [patchAddress](#patchaddress)
    * [deleteAddress](#deleteaddress)
    * [createAffiliation](#createaffiliation)
    * [getAffiliation](#getaffiliation)
    * [patchAffiliation](#patchaffiliation)
    * [deleteAffiliation](#deleteaffiliation)
    * [createAsset](#createasset)
    * [getAsset](#getasset)
    * [patchAsset](#patchasset)
    * [deleteAsset](#deleteasset)
    * [createAssetRelationship](#createassetrelationship)
    * [getAssetRelationship](#getassetrelationship)
    * [patchAssetRelationship](#patchassetrelationship)
    * [deleteAssetRelationship](#deleteassetrelationship)
    * [createBatch](#createbatch)
    * [getBatch](#getbatch)
    * [patchBatch](#patchbatch)
    * [deleteBatch](#deletebatch)
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
    * [createDeliverable](#createdeliverable)
    * [getDeliverable](#getdeliverable)
    * [patchDeliverable](#patchdeliverable)
    * [deleteDeliverable](#deletedeliverable)
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
    * [createEvent](#createevent)
    * [getEvent](#getevent)
    * [patchEvent](#patchevent)
    * [deleteEvent](#deleteevent)
    * [createGAUAllocation](#creategauallocation)
    * [getGAUAllocation](#getgauallocation)
    * [patchGAUAllocation](#patchgauallocation)
    * [deleteGAUAllocation](#deletegauallocation)
    * [createGeneralAccountingUnit](#creategeneralaccountingunit)
    * [getGeneralAccountingUnit](#getgeneralaccountingunit)
    * [patchGeneralAccountingUnit](#patchgeneralaccountingunit)
    * [deleteGeneralAccountingUnit](#deletegeneralaccountingunit)
    * [createHousehold](#createhousehold)
    * [getHousehold](#gethousehold)
    * [patchHousehold](#patchhousehold)
    * [deleteHousehold](#deletehousehold)
    * [createLead](#createlead)
    * [getLead](#getlead)
    * [patchLead](#patchlead)
    * [deleteLead](#deletelead)
    * [createLevel](#createlevel)
    * [getLevel](#getlevel)
    * [patchLevel](#patchlevel)
    * [deleteLevel](#deletelevel)
    * [createMacro](#createmacro)
    * [getMacro](#getmacro)
    * [patchMacro](#patchmacro)
    * [deleteMacro](#deletemacro)
    * [createNPSPDataImport](#createnpspdataimport)
    * [getNPSPDataImport](#getnpspdataimport)
    * [patchNPSPDataImport](#patchnpspdataimport)
    * [deleteNPSPDataImport](#deletenpspdataimport)
    * [createNPSPDataImportBatch](#createnpspdataimportbatch)
    * [getNPSPDataImportBatch](#getnpspdataimportbatch)
    * [patchNPSPDataImportBatch](#patchnpspdataimportbatch)
    * [deleteNPSPDataImportBatch](#deletenpspdataimportbatch)
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
    * [createPartialSoftCredit](#createpartialsoftcredit)
    * [getPartialSoftCredit](#getpartialsoftcredit)
    * [patchPartialSoftCredit](#patchpartialsoftcredit)
    * [deletePartialSoftCredit](#deletepartialsoftcredit)
    * [createPayment](#createpayment)
    * [getPayment](#getpayment)
    * [patchPayment](#patchpayment)
    * [deletePayment](#deletepayment)
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
    * [createRecurringDonations](#createrecurringdonations)
    * [getRecurringDonations](#getrecurringdonations)
    * [patchRecurringDonations](#patchrecurringdonations)
    * [deleteRecurringDonations](#deleterecurringdonations)
    * [createRelationship](#createrelationship)
    * [getRelationship](#getrelationship)
    * [patchRelationship](#patchrelationship)
    * [deleteRelationship](#deleterelationship)
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
    * [createTriggerHandler](#createtriggerhandler)
    * [getTriggerHandler](#gettriggerhandler)
    * [patchTriggerHandler](#patchtriggerhandler)
    * [deleteTriggerHandler](#deletetriggerhandler)
    * [createUser](#createuser)
    * [getUser](#getuser)
    * [patchUser](#patchuser)
    * [deleteUser](#deleteuser)
    * [createUserProvisioningRequest](#createuserprovisioningrequest)
    * [getUserProvisioningRequest](#getuserprovisioningrequest)
    * [patchUserProvisioningRequest](#patchuserprovisioningrequest)
    * [deleteUserProvisioningRequest](#deleteuserprovisioningrequest)
* [Result](#result)
    * [ok](#ok-1)
    * [err](#err-1)
    * [isError](#iserror-1)
    * [isOk](#isok-1)
    * [value](#value-1)
    * [getErr](#geterr-1)
    * [valueOr](#valueor-1)
* [ScopedSFAPIClient](#scopedsfapiclient)
    * [__construct](#__construct-3)
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
    * [__construct](#__construct-4)
    * [getId](#getid)
    * [wasSuccessful](#wassuccessful)
    * [getErrors](#geterrors)
* [SFCreationResult](#sfcreationresult)
    * [__construct](#__construct-5)
    * [ok](#ok-2)
    * [err](#err-2)
    * [isOk](#isok-2)
    * [isError](#iserror-2)
    * [value](#value-2)
    * [getErr](#geterr-2)
    * [valueOr](#valueor-2)
* [SFObject](#sfobject)
    * [__construct](#__construct-6)
* [SFRecords](#sfrecords)
    * [__construct](#__construct-7)
    * [getTotal](#gettotal)
    * [hasMore](#hasmore)
    * [getRecords](#getrecords)
* [SFRecordsResult](#sfrecordsresult)
    * [__construct](#__construct-8)
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



* Full name: \SFClient\Endpoint\Endpoint


### __construct

Endpoint constructor.

```php
Endpoint::__construct( string $baseUrl, string $version )
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$baseUrl` | **string** |  |
| `$version` | **string** |  |




---

### getUrl



```php
Endpoint::getUrl(  ): string
```







---

## FailedToAuthenticate





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
* Parent class: 


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

### createDeliverable



```php
NPSPClient::createDeliverable( array $data ): \SFClient\Result\SFCreationResult
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$data` | **array** |  |




---

### getDeliverable



```php
NPSPClient::getDeliverable( string $id, array $fields = [] ): \SFClient\Result\SFObjectResult
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$id` | **string** |  |
| `$fields` | **array** |  |




---

### patchDeliverable



```php
NPSPClient::patchDeliverable( string $id, array $data ): \SFClient\Result\BoolResult
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$id` | **string** |  |
| `$data` | **array** |  |




---

### deleteDeliverable



```php
NPSPClient::deleteDeliverable( string $id ): \SFClient\Result\BoolResult
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

### createGAUAllocation



```php
NPSPClient::createGAUAllocation( array $data ): \SFClient\Result\SFCreationResult
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$data` | **array** |  |




---

### getGAUAllocation



```php
NPSPClient::getGAUAllocation( string $id, array $fields = [] ): \SFClient\Result\SFObjectResult
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$id` | **string** |  |
| `$fields` | **array** |  |




---

### patchGAUAllocation



```php
NPSPClient::patchGAUAllocation( string $id, array $data ): \SFClient\Result\BoolResult
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$id` | **string** |  |
| `$data` | **array** |  |




---

### deleteGAUAllocation



```php
NPSPClient::deleteGAUAllocation( string $id ): \SFClient\Result\BoolResult
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

### createNPSPDataImport



```php
NPSPClient::createNPSPDataImport( array $data ): \SFClient\Result\SFCreationResult
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$data` | **array** |  |




---

### getNPSPDataImport



```php
NPSPClient::getNPSPDataImport( string $id, array $fields = [] ): \SFClient\Result\SFObjectResult
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$id` | **string** |  |
| `$fields` | **array** |  |




---

### patchNPSPDataImport



```php
NPSPClient::patchNPSPDataImport( string $id, array $data ): \SFClient\Result\BoolResult
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$id` | **string** |  |
| `$data` | **array** |  |




---

### deleteNPSPDataImport



```php
NPSPClient::deleteNPSPDataImport( string $id ): \SFClient\Result\BoolResult
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$id` | **string** |  |




---

### createNPSPDataImportBatch



```php
NPSPClient::createNPSPDataImportBatch( array $data ): \SFClient\Result\SFCreationResult
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$data` | **array** |  |




---

### getNPSPDataImportBatch



```php
NPSPClient::getNPSPDataImportBatch( string $id, array $fields = [] ): \SFClient\Result\SFObjectResult
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$id` | **string** |  |
| `$fields` | **array** |  |




---

### patchNPSPDataImportBatch



```php
NPSPClient::patchNPSPDataImportBatch( string $id, array $data ): \SFClient\Result\BoolResult
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$id` | **string** |  |
| `$data` | **array** |  |




---

### deleteNPSPDataImportBatch



```php
NPSPClient::deleteNPSPDataImportBatch( string $id ): \SFClient\Result\BoolResult
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

### createPayment



```php
NPSPClient::createPayment( array $data ): \SFClient\Result\SFCreationResult
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$data` | **array** |  |




---

### getPayment



```php
NPSPClient::getPayment( string $id, array $fields = [] ): \SFClient\Result\SFObjectResult
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$id` | **string** |  |
| `$fields` | **array** |  |




---

### patchPayment



```php
NPSPClient::patchPayment( string $id, array $data ): \SFClient\Result\BoolResult
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$id` | **string** |  |
| `$data` | **array** |  |




---

### deletePayment



```php
NPSPClient::deletePayment( string $id ): \SFClient\Result\BoolResult
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

### createRecurringDonations



```php
NPSPClient::createRecurringDonations( array $data ): \SFClient\Result\SFCreationResult
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$data` | **array** |  |




---

### getRecurringDonations



```php
NPSPClient::getRecurringDonations( string $id, array $fields = [] ): \SFClient\Result\SFObjectResult
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$id` | **string** |  |
| `$fields` | **array** |  |




---

### patchRecurringDonations



```php
NPSPClient::patchRecurringDonations( string $id, array $data ): \SFClient\Result\BoolResult
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$id` | **string** |  |
| `$data` | **array** |  |




---

### deleteRecurringDonations



```php
NPSPClient::deleteRecurringDonations( string $id ): \SFClient\Result\BoolResult
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
> This document was automatically generated from source code comments on 2018-11-15 using [phpDocumentor](http://www.phpdoc.org/) and [cvuorinen/phpdoc-markdown-public](https://github.com/cvuorinen/phpdoc-markdown-public)
