<?php

namespace IFCPHP\IFC4\Type;
use IFCPHP\IFC4 as IFC;

class IfcStructuralCurveActivityTypeEnum extends IFC\Common{

	static public $params = [[
		'class' => 'Base\Value',
		'type' => 'object',
		'enum' => [
			'CONST',
			'LINEAR',
			'POLYGONAL',
			'EQUIDISTANT',
			'SINUS',
			'PARABOLA',
			'DISCRETE',
			'USERDEFINED',
			'NOTDEFINED',
		],
	]];
}
/* DEFINITION
TYPE IfcStructuralCurveActivityTypeEnum = ENUMERATION OF
(CONST
,LINEAR
,POLYGONAL
,EQUIDISTANT
,SINUS
,PARABOLA
,DISCRETE
,USERDEFINED
,NOTDEFINED);
END_TYPE;
*/
