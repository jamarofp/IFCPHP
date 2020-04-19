<?php

namespace IFCPHP\IFC4\Type;
use IFCPHP\IFC4 as IFC;

class IfcUnitaryControlElementTypeEnum extends IFC\Common{

	static public $elementName = 'IFCUNITARYCONTROLELEMENTTYPEENUM';

	static public $translationFR = 'Enumération des types d\'élément de contrôle unitaire';

	static public $params = [[
		'class' => 'Base\Value',
		'type' => 'object',
		'enum' => [
			'ALARMPANEL',
			'CONTROLPANEL',
			'GASDETECTIONPANEL',
			'INDICATORPANEL',
			'MIMICPANEL',
			'HUMIDISTAT',
			'THERMOSTAT',
			'WEATHERSTATION',
			'USERDEFINED',
			'NOTDEFINED',
		],
	]];
}
/* DEFINITION
TYPE IfcUnitaryControlElementTypeEnum = ENUMERATION OF
(ALARMPANEL
,CONTROLPANEL
,GASDETECTIONPANEL
,INDICATORPANEL
,MIMICPANEL
,HUMIDISTAT
,THERMOSTAT
,WEATHERSTATION
,USERDEFINED
,NOTDEFINED);
END_TYPE;
*/
