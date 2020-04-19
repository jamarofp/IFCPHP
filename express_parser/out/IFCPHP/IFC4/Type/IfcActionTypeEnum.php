<?php

namespace IFCPHP\IFC4\Type;
use IFCPHP\IFC4 as IFC;

class IfcActionTypeEnum extends IFC\Common{

	static public $elementName = 'IFCACTIONTYPEENUM';

	static public $translationFR = 'Énumération des types d\'action';

	static public $params = [[
		'class' => 'Base\Value',
		'type' => 'object',
		'enum' => [
			'PERMANENT_G',
			'VARIABLE_Q',
			'EXTRAORDINARY_A',
			'USERDEFINED',
			'NOTDEFINED',
		],
	]];
}
/* DEFINITION
TYPE IfcActionTypeEnum = ENUMERATION OF
(PERMANENT_G
,VARIABLE_Q
,EXTRAORDINARY_A
,USERDEFINED
,NOTDEFINED);
END_TYPE;
*/
