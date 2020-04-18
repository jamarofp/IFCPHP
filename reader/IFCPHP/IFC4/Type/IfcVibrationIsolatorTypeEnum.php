<?php

namespace IFCPHP\IFC4\Type;
use IFCPHP\IFC4 as IFC;

class IfcVibrationIsolatorTypeEnum extends IFC\Common{

	static public $translationFR = 'Enumération des types d\'isolation anti-vibratoire';

	static public $params = [[
		'class' => 'Base\Value',
		'type' => 'object',
		'enum' => [
			'COMPRESSION',
			'SPRING',
			'USERDEFINED',
			'NOTDEFINED',
		],
	]];
}
/* DEFINITION
TYPE IfcVibrationIsolatorTypeEnum = ENUMERATION OF
(COMPRESSION
,SPRING
,USERDEFINED
,NOTDEFINED);
END_TYPE;
*/
