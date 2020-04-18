<?php

namespace IFCPHP\IFC4\Entity;
use IFCPHP\IFC4 as IFC;

class IfcCurveStyleFont extends IfcPresentationItem{

	static public $params = [
		[
			'name' => 'Name',
			'class' => 'Type\IfcLabel',
			'type' => 'object',
			'optional' => true,
		],
		[
			'name' => 'PatternList',
			'class' => 'Entity\IfcCurveStyleFontPattern',
			'type' => 'array',
			'optional' => false,
			'min' => 1,
		],
	];
}
/* DEFINITION
ENTITY IfcCurveStyleFont
SUBTYPE OF (IfcPresentationItem);
Name : OPTIONAL IfcLabel;
PatternList : LIST [1:?] OF IfcCurveStyleFontPattern;
END_ENTITY;
*/
