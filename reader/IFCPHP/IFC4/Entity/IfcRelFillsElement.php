<?php

namespace IFCPHP\IFC4\Entity;
use IFCPHP\IFC4 as IFC;

class IfcRelFillsElement extends IfcRelConnects{

	static public $translationFR = 'Relation de remplissage';

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
			'name' => 'RelatingOpeningElement',
			'class' => 'Entity\IfcOpeningElement',
			'type' => 'object',
			'optional' => false,
		],
		[
			'name' => 'RelatedBuildingElement',
			'class' => 'Entity\IfcElement',
			'type' => 'object',
			'optional' => false,
		],
	];
}
/* DEFINITION
ENTITY IfcRelFillsElement
SUBTYPE OF (IfcRelConnects);
RelatingOpeningElement : IfcOpeningElement;
RelatedBuildingElement : IfcElement;
END_ENTITY;
*/
