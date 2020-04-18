<?php

namespace IFCPHP\IFC4\Entity;
use IFCPHP\IFC4 as IFC;

class IfcRightCircularCylinder extends IfcCsgPrimitive3D{

	static public $translationFR = 'Cylindre de révolution';

	static public $params = [
		[
			'name' => 'Position',
			'class' => 'Entity\IfcAxis2Placement3D',
			'type' => 'object',
			'optional' => false,
		],
		[
			'name' => 'Height',
			'class' => 'Type\IfcPositiveLengthMeasure',
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
ENTITY IfcRightCircularCylinder
SUBTYPE OF (IfcCsgPrimitive3D);
Height : IfcPositiveLengthMeasure;
Radius : IfcPositiveLengthMeasure;
END_ENTITY;
*/
