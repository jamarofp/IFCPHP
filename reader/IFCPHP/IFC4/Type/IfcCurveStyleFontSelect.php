<?php

namespace IFCPHP\IFC4\Type;
use IFCPHP\IFC4 as IFC;

class IfcCurveStyleFontSelect extends IFC\Common{

	static public $params = [[
		'class' => 'Base\Select',
		'type' => 'object',
	]];
}
/* DEFINITION
TYPE IfcCurveStyleFontSelect = SELECT
(IfcCurveStyleFont
,IfcPreDefinedCurveFont);
END_TYPE;
*/
