<?php

namespace IFCPHP\IFC4\Entity;
use IFCPHP\IFC4 as IFC;

class IfcCylindricalSurface extends IfcElementarySurface{

	static public $elementName = 'IFCCYLINDRICALSURFACE';

	static public $translationFR = 'Surface cylindrique';

	static public $params = [
		[
			'name' => 'Position',
			'class' => 'Entity\IfcAxis2Placement3D',
			'type' => 'object',
			'optional' => false,
		],
		[
			'name' => 'Radius',
			'class' => 'Type\IfcPositiveLengthMeasure',
			'type' => 'object',
			'optional' => false,
		],
	];
}
/* DEFINITION
ENTITY IfcCylindricalSurface
SUBTYPE OF (IfcElementarySurface);
Radius : IfcPositiveLengthMeasure;
END_ENTITY;
*/
