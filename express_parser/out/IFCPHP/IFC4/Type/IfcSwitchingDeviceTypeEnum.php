<?php

namespace IFCPHP\IFC4\Type;
use IFCPHP\IFC4 as IFC;

class IfcSwitchingDeviceTypeEnum extends IFC\Common{

	static public $elementName = 'IFCSWITCHINGDEVICETYPEENUM';

	static public $translationFR = 'Énumération des types d\'interrupteur';

	static public $params = [[
		'class' => 'Base\Value',
		'type' => 'object',
		'enum' => [
			'CONTACTOR',
			'DIMMERSWITCH',
			'EMERGENCYSTOP',
			'KEYPAD',
			'MOMENTARYSWITCH',
			'SELECTORSWITCH',
			'STARTER',
			'SWITCHDISCONNECTOR',
			'TOGGLESWITCH',
			'USERDEFINED',
			'NOTDEFINED',
		],
	]];
}
/* DEFINITION
TYPE IfcSwitchingDeviceTypeEnum = ENUMERATION OF
(CONTACTOR
,DIMMERSWITCH
,EMERGENCYSTOP
,KEYPAD
,MOMENTARYSWITCH
,SELECTORSWITCH
,STARTER
,SWITCHDISCONNECTOR
,TOGGLESWITCH
,USERDEFINED
,NOTDEFINED);
END_TYPE;
*/
