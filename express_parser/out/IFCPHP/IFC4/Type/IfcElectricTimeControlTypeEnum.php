<?php

namespace IFCPHP\IFC4\Type;
use IFCPHP\IFC4 as IFC;

class IfcElectricTimeControlTypeEnum extends IFC\Common{

	static public $elementName = 'IFCELECTRICTIMECONTROLTYPEENUM';

	static public $params = [[
		'class' => 'Base\Value',
		'type' => 'object',
		'enum' => [
			'TIMECLOCK',
			'TIMEDELAY',
			'RELAY',
			'USERDEFINED',
			'NOTDEFINED',
		],
	]];
}
/* DEFINITION
TYPE IfcElectricTimeControlTypeEnum = ENUMERATION OF
(TIMECLOCK
,TIMEDELAY
,RELAY
,USERDEFINED
,NOTDEFINED);
END_TYPE;
*/
