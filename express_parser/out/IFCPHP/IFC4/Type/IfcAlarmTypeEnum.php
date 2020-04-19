<?php

namespace IFCPHP\IFC4\Type;
use IFCPHP\IFC4 as IFC;

class IfcAlarmTypeEnum extends IFC\Common{

	static public $elementName = 'IFCALARMTYPEENUM';

	static public $translationFR = 'Énumération des types d\'alarme';

	static public $params = [[
		'class' => 'Base\Value',
		'type' => 'object',
		'enum' => [
			'BELL',
			'BREAKGLASSBUTTON',
			'LIGHT',
			'MANUALPULLBOX',
			'SIREN',
			'WHISTLE',
			'USERDEFINED',
			'NOTDEFINED',
		],
	]];
}
/* DEFINITION
TYPE IfcAlarmTypeEnum = ENUMERATION OF
(BELL
,BREAKGLASSBUTTON
,LIGHT
,MANUALPULLBOX
,SIREN
,WHISTLE
,USERDEFINED
,NOTDEFINED);
END_TYPE;
*/
