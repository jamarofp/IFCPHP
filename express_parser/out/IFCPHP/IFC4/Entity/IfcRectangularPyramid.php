<?php

namespace IFCPHP\IFC4\Entity;
use IFCPHP\IFC4 as IFC;

class IfcRectangularPyramid extends IfcCsgPrimitive3D{

	static public $elementName = 'IFCRECTANGULARPYRAMID';

	static public $params = [
		[
			'name' => 'Position',
			'class' => 'Entity\IfcAxis2Placement3D',
			'type' => 'object',
			'optional' => false,
		],
		[
			'name' => 'XLength',
			'class' => 'Type\IfcPositiveLengthMeasure',
			'type' => 'object',
			'optional' => false,
		],
		[
			'name' => 'YLength',
			'class' => 'Type\IfcPositiveLengthMeasure',
			'type' => 'object',
			'optional' => false,
		],
		[
			'name' => 'Height',
			'class' => 'Type\IfcPositiveLengthMeasure',
			'type' => 'object',
			'optional' => false,
		],
	];
}
/* DEFINITION
ENTITY IfcRectangularPyramid
SUBTYPE OF (IfcCsgPrimitive3D);
XLength : IfcPositiveLengthMeasure;
YLength : IfcPositiveLengthMeasure;
Height : IfcPositiveLengthMeasure;
END_ENTITY;
*/
