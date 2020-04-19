<?php

namespace IFCPHP\IFC4\Type;
use IFCPHP\IFC4 as IFC;

class IfcInterceptorTypeEnum extends IFC\Common{

	static public $elementName = 'IFCINTERCEPTORTYPEENUM';

	static public $params = [[
		'class' => 'Base\Value',
		'type' => 'object',
		'enum' => [
			'CYCLONIC',
			'GREASE',
			'OIL',
			'PETROL',
			'USERDEFINED',
			'NOTDEFINED',
		],
	]];
}
/* DEFINITION
TYPE IfcInterceptorTypeEnum = ENUMERATION OF
(CYCLONIC
,GREASE
,OIL
,PETROL
,USERDEFINED
,NOTDEFINED);
END_TYPE;
*/
