<?php

namespace IFCPHP\IFC4\Entity;
use IFCPHP\IFC4 as IFC;

class IfcRelConnectsPortToElement extends IfcRelConnects{

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
			'name' => 'RelatedElement',
			'class' => 'Entity\IfcDistributionElement',
			'type' => 'object',
			'optional' => false,
		],
	];
}
/* DEFINITION
ENTITY IfcRelConnectsPortToElement
SUBTYPE OF (IfcRelConnects);
RelatingPort : IfcPort;
RelatedElement : IfcDistributionElement;
END_ENTITY;
*/
