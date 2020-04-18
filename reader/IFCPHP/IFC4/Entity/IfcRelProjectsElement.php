<?php

namespace IFCPHP\IFC4\Entity;
use IFCPHP\IFC4 as IFC;

class IfcRelProjectsElement extends IfcRelDecomposes{

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
			'name' => 'RelatingElement',
			'class' => 'Entity\IfcElement',
			'type' => 'object',
			'optional' => false,
		],
		[
			'name' => 'RelatedFeatureElement',
			'class' => 'Entity\IfcFeatureElementAddition',
			'type' => 'object',
			'optional' => false,
		],
	];
}
/* DEFINITION
ENTITY IfcRelProjectsElement
SUBTYPE OF (IfcRelDecomposes);
RelatingElement : IfcElement;
RelatedFeatureElement : IfcFeatureElementAddition;
END_ENTITY;
*/
