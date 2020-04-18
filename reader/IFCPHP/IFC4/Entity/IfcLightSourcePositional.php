<?php

namespace IFCPHP\IFC4\Entity;
use IFCPHP\IFC4 as IFC;

class IfcLightSourcePositional extends IfcLightSource{

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
			'name' => 'Position',
			'class' => 'Entity\IfcCartesianPoint',
			'type' => 'object',
			'optional' => false,
		],
		[
			'name' => 'Radius',
			'class' => 'Type\IfcPositiveLengthMeasure',
			'type' => 'object',
			'optional' => false,
		],
		[
			'name' => 'ConstantAttenuation',
			'class' => 'Type\IfcReal',
			'type' => 'object',
			'optional' => false,
		],
		[
			'name' => 'DistanceAttenuation',
			'class' => 'Type\IfcReal',
			'type' => 'object',
			'optional' => false,
		],
		[
			'name' => 'QuadricAttenuation',
			'class' => 'Type\IfcReal',
			'type' => 'object',
			'optional' => false,
		],
	];
}
/* SUPERTYPE
	IfcLightSourceSpot
*/


/* DEFINITION
ENTITY IfcLightSourcePositional
SUPERTYPE OF (ONEOF
(IfcLightSourceSpot))
SUBTYPE OF (IfcLightSource);
Position : IfcCartesianPoint;
Radius : IfcPositiveLengthMeasure;
ConstantAttenuation : IfcReal;
DistanceAttenuation : IfcReal;
QuadricAttenuation : IfcReal;
END_ENTITY;
*/
