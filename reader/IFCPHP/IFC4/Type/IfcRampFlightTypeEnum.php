<?php

namespace IFCPHP\IFC4\Type;
use IFCPHP\IFC4 as IFC;

class IfcRampFlightTypeEnum extends IFC\Common{

	static public $translationFR = 'Énumération des types de volée';

	static public $params = [[
		'class' => 'Base\Value',
		'type' => 'object',
		'enum' => [
			'STRAIGHT',
			'SPIRAL',
			'USERDEFINED',
			'NOTDEFINED',
		],
	]];
}
/* DEFINITION
TYPE IfcRampFlightTypeEnum = ENUMERATION OF
(STRAIGHT
,SPIRAL
,USERDEFINED
,NOTDEFINED);
END_TYPE;
*/
