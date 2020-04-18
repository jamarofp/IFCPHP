<?php

namespace IFCPHP\IFC4\Type;
use IFCPHP\IFC4 as IFC;

class IfcLoadGroupTypeEnum extends IFC\Common{

	static public $params = [[
		'class' => 'Base\Value',
		'type' => 'object',
		'enum' => [
			'LOAD_GROUP',
			'LOAD_CASE',
			'LOAD_COMBINATION',
			'USERDEFINED',
			'NOTDEFINED',
		],
	]];
}
/* DEFINITION
TYPE IfcLoadGroupTypeEnum = ENUMERATION OF
(LOAD_GROUP
,LOAD_CASE
,LOAD_COMBINATION
,USERDEFINED
,NOTDEFINED);
END_TYPE;
*/
