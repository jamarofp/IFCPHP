<?php

namespace IFCPHP\IFC4\Entity;
use IFCPHP\IFC4 as IFC;

class IfcRelCoversSpaces extends IfcRelConnects{

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
			'name' => 'RelatingSpace',
			'class' => 'Entity\IfcSpace',
			'type' => 'object',
			'optional' => false,
		],
		[
			'name' => 'RelatedCoverings',
			'class' => 'Entity\IfcCovering',
			'type' => 'array',
			'optional' => false,
			'min' => 1,
		],
	];
}
/* DEFINITION
ENTITY IfcRelCoversSpaces
SUBTYPE OF (IfcRelConnects);
RelatingSpace : IfcSpace;
RelatedCoverings : SET [1:?] OF IfcCovering;
END_ENTITY;
*/
