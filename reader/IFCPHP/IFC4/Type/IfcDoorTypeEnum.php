<?php

namespace IFCPHP\IFC4\Type;
use IFCPHP\IFC4 as IFC;

class IfcDoorTypeEnum extends IFC\Common{

	static public $translationFR = 'Énumération des types de porte';

	static public $params = [[
		'class' => 'Base\Value',
		'type' => 'object',
		'enum' => [
			'DOOR',
			'GATE',
			'TRAPDOOR',
			'USERDEFINED',
			'NOTDEFINED',
		],
	]];
}
/* DEFINITION
TYPE IfcDoorTypeEnum = ENUMERATION OF
(DOOR
,GATE
,TRAPDOOR
,USERDEFINED
,NOTDEFINED);
END_TYPE;
*/
