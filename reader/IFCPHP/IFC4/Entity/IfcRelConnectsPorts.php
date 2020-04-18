<?php

namespace IFCPHP\IFC4\Entity;
use IFCPHP\IFC4 as IFC;

class IfcRelConnectsPorts extends IfcRelConnects{

	static public $translationFR = 'Connection de ports';

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
			'name' => 'RelatingPort',
			'class' => 'Entity\IfcPort',
			'type' => 'object',
			'optional' => false,
		],
		[
			'name' => 'RelatedPort',
			'class' => 'Entity\IfcPort',
			'type' => 'object',
			'optional' => false,
		],
		[
			'name' => 'RealizingElement',
			'class' => 'Entity\IfcElement',
			'type' => 'object',
			'optional' => true,
		],
	];
}
/* DEFINITION
ENTITY IfcRelConnectsPorts
SUBTYPE OF (IfcRelConnects);
RelatingPort : IfcPort;
RelatedPort : IfcPort;
RealizingElement : OPTIONAL IfcElement;
WHERE
NoSelfReference : RelatingPort :<>: RelatedPort;
END_ENTITY;
*/
