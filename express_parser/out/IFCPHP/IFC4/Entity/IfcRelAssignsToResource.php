<?php

namespace IFCPHP\IFC4\Entity;
use IFCPHP\IFC4 as IFC;

class IfcRelAssignsToResource extends IfcRelAssigns{

	static public $elementName = 'IFCRELASSIGNSTORESOURCE';

	static public $translationFR = 'Assignation à ressource';

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
			'name' => 'RelatingResource',
			'class' => 'Type\IfcResourceSelect',
			'type' => 'object',
			'optional' => false,
		],
	];
}
/* DEFINITION
ENTITY IfcRelAssignsToResource
SUBTYPE OF (IfcRelAssigns);
RelatingResource : IfcResourceSelect;
WHERE
NoSelfReference : SIZEOF(QUERY(Temp <* SELF\IfcRelAssigns.RelatedObjects | RelatingResource :=: Temp)) = 0;
END_ENTITY;
*/
