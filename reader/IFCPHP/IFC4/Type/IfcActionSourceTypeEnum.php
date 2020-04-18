<?php

namespace IFCPHP\IFC4\Type;
use IFCPHP\IFC4 as IFC;

class IfcActionSourceTypeEnum extends IFC\Common{

	static public $translationFR = 'Énumération des types de source d\'action';

	static public $params = [[
		'class' => 'Base\Value',
		'type' => 'object',
		'enum' => [
			'DEAD_LOAD_G',
			'COMPLETION_G',
			'LIVE_LOAD_Q',
			'SNOW_S',
			'WIND_W',
			'PRESTRESSING_P',
			'SETTLEMENT_U',
			'TEMPERATURE_T',
			'EARTHQUAKE_E',
			'FIRE',
			'IMPULSE',
			'IMPACT',
			'TRANSPORT',
			'ERECTION',
			'PROPPING',
			'SYSTEM_IMPERFECTION',
			'SHRINKAGE',
			'CREEP',
			'LACK_OF_FIT',
			'BUOYANCY',
			'ICE',
			'CURRENT',
			'WAVE',
			'RAIN',
			'BRAKES',
			'USERDEFINED',
			'NOTDEFINED',
		],
	]];
}
/* DEFINITION
TYPE IfcActionSourceTypeEnum = ENUMERATION OF
(DEAD_LOAD_G
,COMPLETION_G1
,LIVE_LOAD_Q
,SNOW_S
,WIND_W
,PRESTRESSING_P
,SETTLEMENT_U
,TEMPERATURE_T
,EARTHQUAKE_E
,FIRE
,IMPULSE
,IMPACT
,TRANSPORT
,ERECTION
,PROPPING
,SYSTEM_IMPERFECTION
,SHRINKAGE
,CREEP
,LACK_OF_FIT
,BUOYANCY
,ICE
,CURRENT
,WAVE
,RAIN
,BRAKES
,USERDEFINED
,NOTDEFINED);
END_TYPE;
*/
