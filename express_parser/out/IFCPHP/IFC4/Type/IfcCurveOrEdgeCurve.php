<?php

namespace IFCPHP\IFC4\Type;
use IFCPHP\IFC4 as IFC;

class IfcCurveOrEdgeCurve extends IFC\Common{

	static public $elementName = 'IFCCURVEOREDGECURVE';

	static public $params = [[
		'class' => 'Base\Select',
		'type' => 'object',
	]];
}
/* DEFINITION
TYPE IfcCurveOrEdgeCurve = SELECT
(IfcBoundedCurve
,IfcEdgeCurve);
END_TYPE;
*/
