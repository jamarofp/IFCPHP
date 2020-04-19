<?php

namespace IFCPHP\IFC4\Entity;
use IFCPHP\IFC4 as IFC;

class IfcSurfaceStyleRefraction extends IfcPresentationItem{

	static public $elementName = 'IFCSURFACESTYLEREFRACTION';

	static public $translationFR = 'Style de réfraction de surface';

	static public $params = [
		[
			'name' => 'RefractionIndex',
			'class' => 'Type\IfcReal',
			'type' => 'object',
			'optional' => true,
		],
		[
			'name' => 'DispersionFactor',
			'class' => 'Type\IfcReal',
			'type' => 'object',
			'optional' => true,
		],
	];
}
/* DEFINITION
ENTITY IfcSurfaceStyleRefraction
SUBTYPE OF (IfcPresentationItem);
RefractionIndex : OPTIONAL IfcReal;
DispersionFactor : OPTIONAL IfcReal;
END_ENTITY;
*/
