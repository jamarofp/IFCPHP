<?php

namespace IFCPHP\IFC4\Type;
use IFCPHP\IFC4 as IFC;

class IfcAirToAirHeatRecoveryTypeEnum extends IFC\Common{

	static public $translationFR = 'Enumération des types d\'échangeur air-air';

	static public $params = [[
		'class' => 'Base\Value',
		'type' => 'object',
		'enum' => [
			'FIXEDPLATECOUNTERFLOWEXCHANGER',
			'FIXEDPLATECROSSFLOWEXCHANGER',
			'FIXEDPLATEPARALLELFLOWEXCHANGER',
			'ROTARYWHEEL',
			'RUNAROUNDCOILLOOP',
			'HEATPIPE',
			'TWINTOWERENTHALPYRECOVERYLOOPS',
			'THERMOSIPHONSEALEDTUBEHEATEXCHANGERS',
			'THERMOSIPHONCOILTYPEHEATEXCHANGERS',
			'USERDEFINED',
			'NOTDEFINED',
		],
	]];
}
/* DEFINITION
TYPE IfcAirToAirHeatRecoveryTypeEnum = ENUMERATION OF
(FIXEDPLATECOUNTERFLOWEXCHANGER
,FIXEDPLATECROSSFLOWEXCHANGER
,FIXEDPLATEPARALLELFLOWEXCHANGER
,ROTARYWHEEL
,RUNAROUNDCOILLOOP
,HEATPIPE
,TWINTOWERENTHALPYRECOVERYLOOPS
,THERMOSIPHONSEALEDTUBEHEATEXCHANGERS
,THERMOSIPHONCOILTYPEHEATEXCHANGERS
,USERDEFINED
,NOTDEFINED);
END_TYPE;
*/
