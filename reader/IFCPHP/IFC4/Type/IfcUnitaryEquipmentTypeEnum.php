<?php

namespace IFCPHP\IFC4\Type;
use IFCPHP\IFC4 as IFC;

class IfcUnitaryEquipmentTypeEnum extends IFC\Common{

	static public $translationFR = 'Enumération des types d\'équipement unitaire';

	static public $params = [[
		'class' => 'Base\Value',
		'type' => 'object',
		'enum' => [
			'AIRHANDLER',
			'AIRCONDITIONINGUNIT',
			'DEHUMIDIFIER',
			'SPLITSYSTEM',
			'ROOFTOPUNIT',
			'USERDEFINED',
			'NOTDEFINED',
		],
	]];
}
/* DEFINITION
TYPE IfcUnitaryEquipmentTypeEnum = ENUMERATION OF
(AIRHANDLER
,AIRCONDITIONINGUNIT
,DEHUMIDIFIER
,SPLITSYSTEM
,ROOFTOPUNIT
,USERDEFINED
,NOTDEFINED);
END_TYPE;
*/
