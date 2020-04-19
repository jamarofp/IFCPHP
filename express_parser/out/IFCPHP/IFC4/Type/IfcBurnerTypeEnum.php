<?php

namespace IFCPHP\IFC4\Type;
use IFCPHP\IFC4 as IFC;

class IfcBurnerTypeEnum extends IFC\Common{

	static public $elementName = 'IFCBURNERTYPEENUM';

	static public $translationFR = 'Énumération des types de brûleur';

	static public $params = [[
		'class' => 'Base\Value',
		'type' => 'object',
		'enum' => [
			'USERDEFINED',
			'NOTDEFINED',
		],
	]];
}
/* DEFINITION
TYPE IfcBurnerTypeEnum = ENUMERATION OF
(USERDEFINED
,NOTDEFINED);
END_TYPE;
*/
