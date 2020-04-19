<?php

namespace IFCPHP\IFC4\Entity;
use IFCPHP\IFC4 as IFC;

class IfcRelServicesBuildings extends IfcRelConnects{

	static public $elementName = 'IFCRELSERVICESBUILDINGS';

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
			'name' => 'RelatingSystem',
			'class' => 'Entity\IfcSystem',
			'type' => 'object',
			'optional' => false,
		],
		[
			'name' => 'RelatedBuildings',
			'class' => 'Entity\IfcSpatialElement',
			'type' => 'array',
			'optional' => false,
			'min' => 1,
		],
	];
}
/* DEFINITION
ENTITY IfcRelServicesBuildings
SUBTYPE OF (IfcRelConnects);
RelatingSystem : IfcSystem;
RelatedBuildings : SET [1:?] OF IfcSpatialElement;
END_ENTITY;
*/
