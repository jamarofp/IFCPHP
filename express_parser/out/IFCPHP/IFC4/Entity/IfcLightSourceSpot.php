<?php

namespace IFCPHP\IFC4\Entity;
use IFCPHP\IFC4 as IFC;

class IfcLightSourceSpot extends IfcLightSourcePositional{

	static public $elementName = 'IFCLIGHTSOURCESPOT';

	static public $translationFR = 'Source de lumière ponctuelle';

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
		[
			'name' => 'Orientation',
			'class' => 'Entity\IfcDirection',
			'type' => 'object',
			'optional' => false,
		],
		[
			'name' => 'ConcentrationExponent',
			'class' => 'Type\IfcReal',
			'type' => 'object',
			'optional' => true,
		],
		[
			'name' => 'SpreadAngle',
			'class' => 'Type\IfcPositivePlaneAngleMeasure',
			'type' => 'object',
			'optional' => false,
		],
		[
			'name' => 'BeamWidthAngle',
			'class' => 'Type\IfcPositivePlaneAngleMeasure',
			'type' => 'object',
			'optional' => false,
		],
	];
}
/* DEFINITION
ENTITY IfcLightSourceSpot
SUBTYPE OF (IfcLightSourcePositional);
Orientation : IfcDirection;
ConcentrationExponent : OPTIONAL IfcReal;
SpreadAngle : IfcPositivePlaneAngleMeasure;
BeamWidthAngle : IfcPositivePlaneAngleMeasure;
END_ENTITY;
*/
