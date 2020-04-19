<?php

namespace IFCPHP\IFC4\Entity;
use IFCPHP\IFC4 as IFC;

class IfcCurveStyleFontAndScaling extends IfcPresentationItem{

	static public $elementName = 'IFCCURVESTYLEFONTANDSCALING';

	static public $params = [
		[
			'name' => 'Name',
			'class' => 'Type\IfcLabel',
			'type' => 'object',
			'optional' => true,
		],
		[
			'name' => 'CurveFont',
			'class' => 'Type\IfcCurveStyleFontSelect',
			'type' => 'object',
			'optional' => false,
		],
		[
			'name' => 'CurveFontScaling',
			'class' => 'Type\IfcPositiveRatioMeasure',
			'type' => 'object',
			'optional' => false,
		],
	];
}
/* DEFINITION
ENTITY IfcCurveStyleFontAndScaling
SUBTYPE OF (IfcPresentationItem);
Name : OPTIONAL IfcLabel;
CurveFont : IfcCurveStyleFontSelect;
CurveFontScaling : IfcPositiveRatioMeasure;
END_ENTITY;
*/
