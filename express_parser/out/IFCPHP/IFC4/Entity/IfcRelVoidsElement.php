<?php

namespace IFCPHP\IFC4\Entity;
use IFCPHP\IFC4 as IFC;

class IfcRelVoidsElement extends IfcRelDecomposes{

	static public $elementName = 'IFCRELVOIDSELEMENT';

	static public $translationFR = 'Relation de percement';

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
			'name' => 'RelatingBuildingElement',
			'class' => 'Entity\IfcElement',
			'type' => 'object',
			'optional' => false,
		],
		[
			'name' => 'RelatedOpeningElement',
			'class' => 'Entity\IfcFeatureElementSubtraction',
			'type' => 'object',
			'optional' => false,
		],
	];
}
/* DEFINITION
ENTITY IfcRelVoidsElement
SUBTYPE OF (IfcRelDecomposes);
RelatingBuildingElement : IfcElement;
RelatedOpeningElement : IfcFeatureElementSubtraction;
END_ENTITY;
*/
