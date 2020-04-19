<?php

namespace IFCPHP\IFC4\Type;
use IFCPHP\IFC4 as IFC;

class IfcTankTypeEnum extends IFC\Common{

	static public $elementName = 'IFCTANKTYPEENUM';

	static public $translationFR = 'Énumération des types de réservoir';

	static public $params = [[
		'class' => 'Base\Value',
		'type' => 'object',
		'enum' => [
			'BASIN',
			'BREAKPRESSURE',
			'EXPANSION',
			'FEEDANDEXPANSION',
			'PRESSUREVESSEL',
			'STORAGE',
			'VESSEL',
			'USERDEFINED',
			'NOTDEFINED',
		],
	]];
}
/* DEFINITION
TYPE IfcTankTypeEnum = ENUMERATION OF
(BASIN
,BREAKPRESSURE
,EXPANSION
,FEEDANDEXPANSION
,PRESSUREVESSEL
,STORAGE
,VESSEL
,USERDEFINED
,NOTDEFINED);
END_TYPE;
*/
