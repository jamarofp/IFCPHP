<?php

namespace IFCPHP\IFC4\Type;
use IFCPHP\IFC4 as IFC;

class IfcProtectiveDeviceTypeEnum extends IFC\Common{

	static public $translationFR = 'Enumération des types d\'équipement de protection';

	static public $params = [[
		'class' => 'Base\Value',
		'type' => 'object',
		'enum' => [
			'CIRCUITBREAKER',
			'EARTHLEAKAGECIRCUITBREAKER',
			'EARTHINGSWITCH',
			'FUSEDISCONNECTOR',
			'RESIDUALCURRENTCIRCUITBREAKER',
			'RESIDUALCURRENTSWITCH',
			'VARISTOR',
			'USERDEFINED',
			'NOTDEFINED',
		],
	]];
}
/* DEFINITION
TYPE IfcProtectiveDeviceTypeEnum = ENUMERATION OF
(CIRCUITBREAKER
,EARTHLEAKAGECIRCUITBREAKER
,EARTHINGSWITCH
,FUSEDISCONNECTOR
,RESIDUALCURRENTCIRCUITBREAKER
,RESIDUALCURRENTSWITCH
,VARISTOR
,USERDEFINED
,NOTDEFINED);
END_TYPE;
*/
