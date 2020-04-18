<?php

namespace IFCPHP\IFC4\Entity;
use IFCPHP\IFC4 as IFC;

class IfcRightCircularCone extends IfcCsgPrimitive3D{

	static public $translationFR = 'Cône de révolution';

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
			'name' => 'BottomRadius',
			'class' => 'Type\IfcPositiveLengthMeasure',
			'type' => 'object',
			'optional' => false,
		],
	];
}
/* DEFINITION
ENTITY IfcRightCircularCone
SUBTYPE OF (IfcCsgPrimitive3D);
Height : IfcPositiveLengthMeasure;
BottomRadius : IfcPositiveLengthMeasure;
END_ENTITY;
*/
