<?php

namespace IFCPHP\IFC4\Entity;
use IFCPHP\IFC4 as IFC;

class IfcLightSource extends IfcGeometricRepresentationItem{

	static public $translationFR = 'Source de lumière';

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
	];
}
/* SUPERTYPE
	IfcLightSourceAmbient
	IfcLightSourceDirectional
	IfcLightSourceGoniometric
	IfcLightSourcePositional
*/


/* DEFINITION
ENTITY IfcLightSource
ABSTRACT SUPERTYPE OF (ONEOF
(IfcLightSourceAmbient
,IfcLightSourceDirectional
,IfcLightSourceGoniometric
,IfcLightSourcePositional))
SUBTYPE OF (IfcGeometricRepresentationItem);
Name : OPTIONAL IfcLabel;
LightColour : IfcColourRgb;
AmbientIntensity : OPTIONAL IfcNormalisedRatioMeasure;
Intensity : OPTIONAL IfcNormalisedRatioMeasure;
END_ENTITY;
*/
