<?php

namespace IFCPHP\IFC4\Entity;
use IFCPHP\IFC4 as IFC;

class IfcSurfaceStyleLighting extends IfcPresentationItem{

	static public $elementName = 'IFCSURFACESTYLELIGHTING';

	static public $translationFR = 'Style d\'éclairage de surface';

	static public $params = [
		[
			'name' => 'DiffuseTransmissionColour',
			'class' => 'Entity\IfcColourRgb',
			'type' => 'object',
			'optional' => false,
		],
		[
			'name' => 'DiffuseReflectionColour',
			'class' => 'Entity\IfcColourRgb',
			'type' => 'object',
			'optional' => false,
		],
		[
			'name' => 'TransmissionColour',
			'class' => 'Entity\IfcColourRgb',
			'type' => 'object',
			'optional' => false,
		],
		[
			'name' => 'ReflectanceColour',
			'class' => 'Entity\IfcColourRgb',
			'type' => 'object',
			'optional' => false,
		],
	];
}
/* DEFINITION
ENTITY IfcSurfaceStyleLighting
SUBTYPE OF (IfcPresentationItem);
DiffuseTransmissionColour : IfcColourRgb;
DiffuseReflectionColour : IfcColourRgb;
TransmissionColour : IfcColourRgb;
ReflectanceColour : IfcColourRgb;
END_ENTITY;
*/
