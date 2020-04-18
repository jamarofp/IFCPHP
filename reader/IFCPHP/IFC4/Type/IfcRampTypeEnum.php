<?php

namespace IFCPHP\IFC4\Type;
use IFCPHP\IFC4 as IFC;

class IfcRampTypeEnum extends IFC\Common{

	static public $translationFR = 'Énumération des types de rampe';

	static public $params = [[
		'class' => 'Base\Value',
		'type' => 'object',
		'enum' => [
			'STRAIGHT_RUN_RAMP',
			'TWO_STRAIGHT_RUN_RAMP',
			'QUARTER_TURN_RAMP',
			'TWO_QUARTER_TURN_RAMP',
			'HALF_TURN_RAMP',
			'SPIRAL_RAMP',
			'USERDEFINED',
			'NOTDEFINED',
		],
	]];
}
/* DEFINITION
TYPE IfcRampTypeEnum = ENUMERATION OF
(STRAIGHT_RUN_RAMP
,TWO_STRAIGHT_RUN_RAMP
,QUARTER_TURN_RAMP
,TWO_QUARTER_TURN_RAMP
,HALF_TURN_RAMP
,SPIRAL_RAMP
,USERDEFINED
,NOTDEFINED);
END_TYPE;
*/
