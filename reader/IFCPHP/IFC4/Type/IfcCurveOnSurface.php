<?php

namespace IFCPHP\IFC4\Type;
use IFCPHP\IFC4 as IFC;

class IfcCurveOnSurface extends IFC\Common{

	static public $params = [[
		'class' => 'Base\Select',
		'type' => 'object',
	]];
}
/* DEFINITION
TYPE IfcCurveOnSurface = SELECT
(IfcCompositeCurveOnSurface
,IfcPcurve);
END_TYPE;
*/
