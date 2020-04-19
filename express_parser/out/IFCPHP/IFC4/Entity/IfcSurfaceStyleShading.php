<?php

namespace IFCPHP\IFC4\Entity;
use IFCPHP\IFC4 as IFC;

class IfcSurfaceStyleShading extends IfcPresentationItem{

	static public $elementName = 'IFCSURFACESTYLESHADING';

	static public $translationFR = 'Style d\'ombrage de surface';

	static public $params = [
		[
			'name' => 'SurfaceColour',
			'class' => 'Entity\IfcColourRgb',
			'type' => 'object',
			'optional' => false,
		],
	];
}
/* SUPERTYPE
	IfcSurfaceStyleRendering
*/


/* DEFINITION
ENTITY IfcSurfaceStyleShading
SUPERTYPE OF (ONEOF
(IfcSurfaceStyleRendering))
SUBTYPE OF (IfcPresentationItem);
SurfaceColour : IfcColourRgb;
END_ENTITY;
*/
