<?php

namespace IFCPHP\IFC4\Entity;
use IFCPHP\IFC4 as IFC;

class IfcEllipse extends IfcConic{

	static public $elementName = 'IFCELLIPSE';

	static public $translationFR = 'Ellipse';

	static public $params = [
		[
			'name' => 'Position',
			'class' => 'Type\IfcAxis2Placement',
			'type' => 'object',
			'optional' => false,
		],
		[
			'name' => 'SemiAxis1',
			'class' => 'Type\IfcPositiveLengthMeasure',
			'type' => 'object',
			'optional' => false,
		],
		[
			'name' => 'SemiAxis2',
			'class' => 'Type\IfcPositiveLengthMeasure',
			'type' => 'object',
			'optional' => false,
		],
	];
}
/* DEFINITION
ENTITY IfcEllipse
SUBTYPE OF (IfcConic);
SemiAxis1 : IfcPositiveLengthMeasure;
SemiAxis2 : IfcPositiveLengthMeasure;
END_ENTITY;
*/
