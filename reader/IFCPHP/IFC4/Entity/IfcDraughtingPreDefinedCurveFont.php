<?php

namespace IFCPHP\IFC4\Entity;
use IFCPHP\IFC4 as IFC;

class IfcDraughtingPreDefinedCurveFont extends IfcPreDefinedCurveFont{

	static public $params = [
		[
			'name' => 'Name',
			'class' => 'Type\IfcLabel',
			'type' => 'object',
			'optional' => false,
		],
	];
}
/* DEFINITION
ENTITY IfcDraughtingPreDefinedCurveFont
SUBTYPE OF (IfcPreDefinedCurveFont);
WHERE
PreDefinedCurveFontNames : SELF\IfcPredefinedItem.Name IN
['continuous',
'chain',
'chain double dash',
'dashed',
'dotted',
'by layer'];
END_ENTITY;
*/
