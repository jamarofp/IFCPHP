<?php

namespace IFCPHP\IFC4\Entity;
use IFCPHP\IFC4 as IFC;

class IfcResourceLevelRelationship extends IFC\Common{

	static public $elementName = 'IFCRESOURCELEVELRELATIONSHIP';

	static public $params = [
		[
			'name' => 'Name',
			'class' => 'Type\IfcLabel',
			'type' => 'object',
			'optional' => true,
		],
		[
			'name' => 'Description',
			'class' => 'Type\IfcText',
			'type' => 'object',
			'optional' => true,
		],
	];
}
/* SUPERTYPE
	IfcApprovalRelationship
	IfcCurrencyRelationship
	IfcDocumentInformationRelationship
	IfcExternalReferenceRelationship
	IfcMaterialRelationship
	IfcOrganizationRelationship
	IfcPropertyDependencyRelationship
	IfcResourceApprovalRelationship
	IfcResourceConstraintRelationship
*/


/* DEFINITION
ENTITY IfcResourceLevelRelationship
ABSTRACT SUPERTYPE OF (ONEOF
(IfcApprovalRelationship
,IfcCurrencyRelationship
,IfcDocumentInformationRelationship
,IfcExternalReferenceRelationship
,IfcMaterialRelationship
,IfcOrganizationRelationship
,IfcPropertyDependencyRelationship
,IfcResourceApprovalRelationship
,IfcResourceConstraintRelationship));
Name : OPTIONAL IfcLabel;
Description : OPTIONAL IfcText;
END_ENTITY;
*/
