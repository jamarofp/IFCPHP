<?php

namespace IFCPHP\IFC4\Entity;
use IFCPHP\IFC4 as IFC;

class IfcBlock extends IfcCsgPrimitive3D{

	static public $elementName = 'IFCBLOCK';

	static public $translationFR = 'Parallélépipède';

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
			'name' => 'ZLength',
			'class' => 'Type\IfcPositiveLengthMeasure',
			'type' => 'object',
			'optional' => false,
		],
	];
}
/* DEFINITION
ENTITY IfcBlock
SUBTYPE OF (IfcCsgPrimitive3D);
XLength : IfcPositiveLengthMeasure;
YLength : IfcPositiveLengthMeasure;
ZLength : IfcPositiveLengthMeasure;
END_ENTITY;
*/
