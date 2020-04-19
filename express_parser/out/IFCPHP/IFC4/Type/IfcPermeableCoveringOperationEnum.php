<?php

namespace IFCPHP\IFC4\Type;
use IFCPHP\IFC4 as IFC;

class IfcPermeableCoveringOperationEnum extends IFC\Common{

	static public $elementName = 'IFCPERMEABLECOVERINGOPERATIONENUM';

	static public $params = [[
		'class' => 'Base\Value',
		'type' => 'object',
		'enum' => [
			'GRILL',
			'LOUVER',
			'SCREEN',
			'USERDEFINED',
			'NOTDEFINED',
		],
	]];
}
/* DEFINITION
TYPE IfcPermeableCoveringOperationEnum = ENUMERATION OF
(GRILL
,LOUVER
,SCREEN
,USERDEFINED
,NOTDEFINED);
END_TYPE;
*/
