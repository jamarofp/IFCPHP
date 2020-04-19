<?php

namespace IFCPHP\IFC4\Type;
use IFCPHP\IFC4 as IFC;

class IfcProjectionElementTypeEnum extends IFC\Common{

	static public $elementName = 'IFCPROJECTIONELEMENTTYPEENUM';

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
TYPE IfcProjectionElementTypeEnum = ENUMERATION OF
(USERDEFINED
,NOTDEFINED);
END_TYPE;
*/
