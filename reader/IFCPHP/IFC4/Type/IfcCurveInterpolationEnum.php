<?php

namespace IFCPHP\IFC4\Type;
use IFCPHP\IFC4 as IFC;

class IfcCurveInterpolationEnum extends IFC\Common{

	static public $params = [[
		'class' => 'Base\Value',
		'type' => 'object',
		'enum' => [
			'LINEAR',
			'LOG_LINEAR',
			'LOG_LOG',
			'NOTDEFINED',
		],
	]];
}
/* DEFINITION
TYPE IfcCurveInterpolationEnum = ENUMERATION OF
(LINEAR
,LOG_LINEAR
,LOG_LOG
,NOTDEFINED);
END_TYPE;
*/
