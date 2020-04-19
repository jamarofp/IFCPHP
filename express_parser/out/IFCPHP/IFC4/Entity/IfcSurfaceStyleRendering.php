<?php

namespace IFCPHP\IFC4\Entity;
use IFCPHP\IFC4 as IFC;

class IfcSurfaceStyleRendering extends IfcSurfaceStyleShading{

	static public $elementName = 'IFCSURFACESTYLERENDERING';

	static public $translationFR = 'Style de rendu de surface';

	static public $params = [
		[
			'name' => 'SurfaceColour',
			'class' => 'Entity\IfcColourRgb',
			'type' => 'object',
			'optional' => false,
		],
		[
			'name' => 'Transparency',
			'class' => 'Type\IfcNormalisedRatioMeasure',
			'type' => 'object',
			'optional' => true,
		],
		[
			'name' => 'DiffuseColour',
			'class' => 'Type\IfcColourOrFactor',
			'type' => 'object',
			'optional' => true,
		],
		[
			'name' => 'TransmissionColour',
			'class' => 'Type\IfcColourOrFactor',
			'type' => 'object',
			'optional' => true,
		],
		[
			'name' => 'DiffuseTransmissionColour',
			'class' => 'Type\IfcColourOrFactor',
			'type' => 'object',
			'optional' => true,
		],
		[
			'name' => 'ReflectionColour',
			'class' => 'Type\IfcColourOrFactor',
			'type' => 'object',
			'optional' => true,
		],
		[
			'name' => 'SpecularColour',
			'class' => 'Type\IfcColourOrFactor',
			'type' => 'object',
			'optional' => true,
		],
		[
			'name' => 'SpecularHighlight',
			'class' => 'Type\IfcSpecularHighlightSelect',
			'type' => 'object',
			'optional' => true,
		],
		[
			'name' => 'ReflectanceMethod',
			'class' => 'Type\IfcReflectanceMethodEnum',
			'type' => 'object',
			'optional' => false,
		],
	];
}
/* DEFINITION
ENTITY IfcSurfaceStyleRendering
SUBTYPE OF (IfcSurfaceStyleShading);
Transparency : OPTIONAL IfcNormalisedRatioMeasure;
DiffuseColour : OPTIONAL IfcColourOrFactor;
TransmissionColour : OPTIONAL IfcColourOrFactor;
DiffuseTransmissionColour : OPTIONAL IfcColourOrFactor;
ReflectionColour : OPTIONAL IfcColourOrFactor;
SpecularColour : OPTIONAL IfcColourOrFactor;
SpecularHighlight : OPTIONAL IfcSpecularHighlightSelect;
ReflectanceMethod : IfcReflectanceMethodEnum;
END_ENTITY;
*/
