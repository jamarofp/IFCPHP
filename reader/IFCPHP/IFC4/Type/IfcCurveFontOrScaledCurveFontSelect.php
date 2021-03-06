<?php

namespace IFCPHP\IFC4\Type;
use IFCPHP\IFC4 as IFC;

class IfcCurveFontOrScaledCurveFontSelect extends IFC\Common{

	static public $elementName = 'IFCCURVEFONTORSCALEDCURVEFONTSELECT';

	static public $params = [[
		'class' => 'Base\Select',
		'type' => 'object',
	]];
}
/* DEFINITION
TYPE IfcCurveFontOrScaledCurveFontSelect = SELECT
(IfcCurveStyleFontAndScaling
,IfcCurveStyleFontSelect);
END_TYPE;
*/
