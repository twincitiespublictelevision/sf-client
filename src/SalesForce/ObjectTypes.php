<?php

namespace SFClient\SalesForce;

$types = [
  'Account',
  'Activity',
  'Asset',
  'AssetRelationship',
  'Campaign',
  'CampaignMember',
  'Case',
  'Contact',
  'ContentVersion',
  'Contract',
  'ContractContactRole',
  'DuplicateRecordItem',
  'DuplicateRecordSet',
  'EmailMessage',
  'Event',
  'Lead',
  'Macro',
  'Opportunity',
  'OpportunityLineItem',
  'Order',
  'OrderItem',
  'Pricebook2',
  'PricebookEntry',
  'QuickText',
  'Scorecard',
  'ScorecardAssociation',
  'ScorecardMetric',
  'SignupRequest',
  'SocialPersona',
  'SocialPost',
  'Task',
  'User',
  'UserProvisioningRequest'
];

return array_combine($types, $types);