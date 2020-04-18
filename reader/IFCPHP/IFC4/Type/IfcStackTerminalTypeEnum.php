<?php

namespace IFCPHP\IFC4\Type;
use IFCPHP\IFC4 as IFC;

class IfcStackTerminalTypeEnum extends IFC\Common{

	static public $params = [[
		'class' => 'Base\Value',
		'type' => 'object',
		'enum' => [
			'BIRDCAGE',
			'COWL',
			'RAINWATERHOPPER',
			'USERDEFINED',
			'NOTDEFINED',
		],
	]];
}
/* DEFINITION
TYPE IfcStackTerminalTypeEnum = ENUMERATION OF
(BIRDCAGE
,COWL
,RAINWATERHOPPER
,USERDEFINED
,NOTDEFINED);
END_TYPE;
*/
