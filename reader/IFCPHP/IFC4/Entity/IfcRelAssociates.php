<?php

namespace IFCPHP\IFC4\Entity;
use IFCPHP\IFC4 as IFC;

class IfcRelAssociates extends IfcRelationship{

	static public $translationFR = 'Association';

	static public $params = [
		[
			'name' => 'GlobalId',
			'class' => 'Type\IfcGloballyUniqueId',
			'type' => 'object',
			'optional' => false,
		],
		[
			'name' => 'OwnerHistory',
			'class' => 'Entity\IfcOwnerHistory',
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
			'name' => 'RelatedObjects',
			'class' => 'Type\IfcDefinitionSelect',
			'type' => 'array',
			'optional' => false,
			'min' => 1,
		],
	];
}
/* SUPERTYPE
	IfcRelAssociatesApproval
	IfcRelAssociatesClassification
	IfcRelAssociatesConstraint
	IfcRelAssociatesDocument
	IfcRelAssociatesLibrary
	IfcRelAssociatesMaterial
*/


/* DEFINITION
ENTITY IfcRelAssociates
ABSTRACT SUPERTYPE OF (ONEOF
(IfcRelAssociatesApproval
,IfcRelAssociatesClassification
,IfcRelAssociatesConstraint
,IfcRelAssociatesDocument
,IfcRelAssociatesLibrary
,IfcRelAssociatesMaterial))
SUBTYPE OF (IfcRelationship);
RelatedObjects : SET [1:?] OF IfcDefinitionSelect;
END_ENTITY;
*/
