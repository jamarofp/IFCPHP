<?php

namespace IFCPHP\IFC4\Entity;
use IFCPHP\IFC4 as IFC;

class IfcColourRgb extends IfcColourSpecification{

	static public $elementName = 'IFCCOLOURRGB';

	static public $translationFR = 'Couleur RGB';

	static public $params = [
		[
			'name' => 'Name',
			'class' => 'Type\IfcLabel',
			'type' => 'object',
			'optional' => true,
		],
		[
			'name' => 'Red',
			'class' => 'Type\IfcNormalisedRatioMeasure',
			'type' => 'object',
			'optional' => false,
		],
		[
			'name' => 'Green',
			'class' => 'Type\IfcNormalisedRatioMeasure',
			'type' => 'object',
			'optional' => false,
		],
		[
			'name' => 'Blue',
			'class' => 'Type\IfcNormalisedRatioMeasure',
			'type' => 'object',
			'optional' => false,
		],
	];
}
/* DEFINITION
ENTITY IfcColourRgb
SUBTYPE OF (IfcColourSpecification);
Red : IfcNormalisedRatioMeasure;
Green : IfcNormalisedRatioMeasure;
Blue : IfcNormalisedRatioMeasure;
END_ENTITY;
*/
