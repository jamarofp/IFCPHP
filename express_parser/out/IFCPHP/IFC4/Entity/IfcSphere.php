<?php

namespace IFCPHP\IFC4\Entity;
use IFCPHP\IFC4 as IFC;

class IfcSphere extends IfcCsgPrimitive3D{

	static public $elementName = 'IFCSPHERE';

	static public $translationFR = 'Sphère';

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
ENTITY IfcSphere
SUBTYPE OF (IfcCsgPrimitive3D);
Radius : IfcPositiveLengthMeasure;
END_ENTITY;
*/
