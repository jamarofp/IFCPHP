<?php

namespace IFCPHP\IFC4\Entity;
use IFCPHP\IFC4 as IFC;

class IfcCircle extends IfcConic{

	static public $translationFR = 'Cercle';

	static public $params = [
		[
			'name' => 'Position',
			'class' => 'Type\IfcAxis2Placement',
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
ENTITY IfcCircle
SUBTYPE OF (IfcConic);
Radius : IfcPositiveLengthMeasure;
END_ENTITY;
*/
