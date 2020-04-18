<?php

namespace IFCPHP\IFC4\Entity;
use IFCPHP\IFC4 as IFC;

class IfcRelAssignsToProcess extends IfcRelAssigns{

	static public $translationFR = 'Assignation à processus';

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
		[
			'name' => 'RelatingProcess',
			'class' => 'Type\IfcProcessSelect',
			'type' => 'object',
			'optional' => false,
		],
		[
			'name' => 'QuantityInProcess',
			'class' => 'Entity\IfcMeasureWithUnit',
			'type' => 'object',
			'optional' => true,
		],
	];
}
/* DEFINITION
ENTITY IfcRelAssignsToProcess
SUBTYPE OF (IfcRelAssigns);
RelatingProcess : IfcProcessSelect;
QuantityInProcess : OPTIONAL IfcMeasureWithUnit;
WHERE
NoSelfReference : SIZEOF(QUERY(Temp <* SELF\IfcRelAssigns.RelatedObjects | RelatingProcess :=: Temp)) = 0;
END_ENTITY;
*/
