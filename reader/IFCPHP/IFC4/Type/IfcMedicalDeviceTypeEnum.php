<?php

namespace IFCPHP\IFC4\Type;
use IFCPHP\IFC4 as IFC;

class IfcMedicalDeviceTypeEnum extends IFC\Common{

	static public $translationFR = 'Enumération des types d\'équipement médica';

	static public $params = [[
		'class' => 'Base\Value',
		'type' => 'object',
		'enum' => [
			'AIRSTATION',
			'FEEDAIRUNIT',
			'OXYGENGENERATOR',
			'OXYGENPLANT',
			'VACUUMSTATION',
			'USERDEFINED',
			'NOTDEFINED',
		],
	]];
}
/* DEFINITION
TYPE IfcMedicalDeviceTypeEnum = ENUMERATION OF
(AIRSTATION
,FEEDAIRUNIT
,OXYGENGENERATOR
,OXYGENPLANT
,VACUUMSTATION
,USERDEFINED
,NOTDEFINED);
END_TYPE;
*/
