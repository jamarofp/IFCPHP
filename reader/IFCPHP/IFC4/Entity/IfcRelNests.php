<?php

namespace IFCPHP\IFC4\Entity;
use IFCPHP\IFC4 as IFC;

class IfcRelNests extends IfcRelDecomposes{

	static public $elementName = 'IFCRELNESTS';

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
			'name' => 'RelatingObject',
			'class' => 'Entity\IfcObjectDefinition',
			'type' => 'object',
			'optional' => false,
		],
		[
			'name' => 'RelatedObjects',
			'class' => 'Entity\IfcObjectDefinition',
			'type' => 'array',
			'optional' => false,
			'min' => 1,
		],
	];
}
/* DEFINITION
ENTITY IfcRelNests
SUBTYPE OF (IfcRelDecomposes);
RelatingObject : IfcObjectDefinition;
RelatedObjects : LIST [1:?] OF IfcObjectDefinition;
WHERE
NoSelfReference : SIZEOF(QUERY(Temp <* RelatedObjects | RelatingObject :=: Temp)) = 0;
END_ENTITY;
*/
