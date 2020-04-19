<?php

namespace IFCPHP\IFC4\Type;
use IFCPHP\IFC4 as IFC;

class IfcCoolingTowerTypeEnum extends IFC\Common{

	static public $elementName = 'IFCCOOLINGTOWERTYPEENUM';

	static public $translationFR = 'Énumération des types de tour de refroidissement';

	static public $params = [[
		'class' => 'Base\Value',
		'type' => 'object',
		'enum' => [
			'NATURALDRAFT',
			'MECHANICALINDUCEDDRAFT',
			'MECHANICALFORCEDDRAFT',
			'USERDEFINED',
			'NOTDEFINED',
		],
	]];
}
/* DEFINITION
TYPE IfcCoolingTowerTypeEnum = ENUMERATION OF
(NATURALDRAFT
,MECHANICALINDUCEDDRAFT
,MECHANICALFORCEDDRAFT
,USERDEFINED
,NOTDEFINED);
END_TYPE;
*/
