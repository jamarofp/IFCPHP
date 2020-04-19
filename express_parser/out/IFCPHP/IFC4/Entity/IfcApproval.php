<?php

namespace IFCPHP\IFC4\Entity;
use IFCPHP\IFC4 as IFC;

class IfcApproval extends IFC\Common{

	static public $elementName = 'IFCAPPROVAL';

	static public $translationFR = 'Approbation';

	static public $params = [
		[
			'name' => 'Identifier',
			'class' => 'Type\IfcIdentifier',
			'type' => 'object',
			'optional' => true,
		],
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
		[
			'name' => 'TimeOfApproval',
			'class' => 'Type\IfcDateTime',
			'type' => 'object',
			'optional' => true,
		],
		[
			'name' => 'Status',
			'class' => 'Type\IfcLabel',
			'type' => 'object',
			'optional' => true,
		],
		[
			'name' => 'Level',
			'class' => 'Type\IfcLabel',
			'type' => 'object',
			'optional' => true,
		],
		[
			'name' => 'Qualifier',
			'class' => 'Type\IfcText',
			'type' => 'object',
			'optional' => true,
		],
		[
			'name' => 'RequestingApproval',
			'class' => 'Type\IfcActorSelect',
			'type' => 'object',
			'optional' => true,
		],
		[
			'name' => 'GivingApproval',
			'class' => 'Type\IfcActorSelect',
			'type' => 'object',
			'optional' => true,
		],
	];
}
/* DEFINITION
ENTITY IfcApproval;
Identifier : OPTIONAL IfcIdentifier;
Name : OPTIONAL IfcLabel;
Description : OPTIONAL IfcText;
TimeOfApproval : OPTIONAL IfcDateTime;
Status : OPTIONAL IfcLabel;
Level : OPTIONAL IfcLabel;
Qualifier : OPTIONAL IfcText;
RequestingApproval : OPTIONAL IfcActorSelect;
GivingApproval : OPTIONAL IfcActorSelect;
INVERSE
HasExternalReferences : SET [0:?] OF IfcExternalReferenceRelationship FOR RelatedResourceObjects;
ApprovedObjects : SET [0:?] OF IfcRelAssociatesApproval FOR RelatingApproval;
ApprovedResources : SET [0:?] OF IfcResourceApprovalRelationship FOR RelatingApproval;
IsRelatedWith : SET [0:?] OF IfcApprovalRelationship FOR RelatedApprovals;
Relates : SET [0:?] OF IfcApprovalRelationship FOR RelatingApproval;
WHERE
HasIdentifierOrName : EXISTS (Identifier) OR EXISTS (Name);
END_ENTITY;
*/
