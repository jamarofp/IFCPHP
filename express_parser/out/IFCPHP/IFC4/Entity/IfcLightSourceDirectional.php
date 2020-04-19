<?php

namespace IFCPHP\IFC4\Entity;
use IFCPHP\IFC4 as IFC;

class IfcLightSourceDirectional extends IfcLightSource{

	static public $elementName = 'IFCLIGHTSOURCEDIRECTIONAL';

	static public $translationFR = 'Source de lumière directionnelle';

	static public $params = [
		[
			'name' => 'Name',
			'class' => 'Type\IfcLabel',
			'type' => 'object',
			'optional' => true,
		],
		[
			'name' => 'LightColour',
			'class' => 'Entity\IfcColourRgb',
			'type' => 'object',
			'optional' => false,
		],
		[
			'name' => 'AmbientIntensity',
			'class' => 'Type\IfcNormalisedRatioMeasure',
			'type' => 'object',
			'optional' => true,
		],
		[
			'name' => 'Intensity',
			'class' => 'Type\IfcNormalisedRatioMeasure',
			'type' => 'object',
			'optional' => true,
		],
		[
			'name' => 'Orientation',
			'class' => 'Entity\IfcDirection',
			'type' => 'object',
			'optional' => false,
		],
	];
}
/* DEFINITION
ENTITY IfcLightSourceDirectional
SUBTYPE OF (IfcLightSource);
Orientation : IfcDirection;
END_ENTITY;
*/
