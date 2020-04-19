<?php

namespace IFCPHP\IFC4\Entity;
use IFCPHP\IFC4 as IFC;

class IfcCurveStyleFontPattern extends IfcPresentationItem{

	static public $elementName = 'IFCCURVESTYLEFONTPATTERN';

	static public $params = [
		[
			'name' => 'VisibleSegmentLength',
			'class' => 'Type\IfcLengthMeasure',
			'type' => 'object',
			'optional' => false,
		],
		[
			'name' => 'InvisibleSegmentLength',
			'class' => 'Type\IfcPositiveLengthMeasure',
			'type' => 'object',
			'optional' => false,
		],
	];
}
/* DEFINITION
ENTITY IfcCurveStyleFontPattern
SUBTYPE OF (IfcPresentationItem);
VisibleSegmentLength : IfcLengthMeasure;
InvisibleSegmentLength : IfcPositiveLengthMeasure;
WHERE
VisibleLengthGreaterEqualZero : VisibleSegmentLength >= 0.;
END_ENTITY;
*/
