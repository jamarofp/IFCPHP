<?php

namespace IFCPHP\IFC4\Entity;
use IFCPHP\IFC4 as IFC;

class IfcRelAssigns extends IfcRelationship{

	static public $elementName = 'IFCRELASSIGNS';

	static public $translationFR = 'Assignation';

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
			'class' => 'Entity\IfcObjectDefinition',
			'type' => 'array',
			'optional' => false,
			'min' => 1,
		],
		[
			'name' => 'RelatedObjectsType',
			'class' => 'Type\IfcObjectTypeEnum',
			'type' => 'object',
			'optional' => true,
		],
	];
}
/* SUPERTYPE
	IfcRelAssignsToActor
	IfcRelAssignsToControl
	IfcRelAssignsToGroup
	IfcRelAssignsToProcess
	IfcRelAssignsToProduct
	IfcRelAssignsToResource
*/


/* DEFINITION
ENTITY IfcRelAssigns
ABSTRACT SUPERTYPE OF (ONEOF
(IfcRelAssignsToActor
,IfcRelAssignsToControl
,IfcRelAssignsToGroup
,IfcRelAssignsToProcess
,IfcRelAssignsToProduct
,IfcRelAssignsToResource))
SUBTYPE OF (IfcRelationship);
RelatedObjects : SET [1:?] OF IfcObjectDefinition;
RelatedObjectsType : OPTIONAL IfcObjectTypeEnum;
WHERE
WR1 : IfcCorrectObjectAssignment(RelatedObjectsType, RelatedObjects);
END_ENTITY;
*/
