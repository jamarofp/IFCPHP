<?php

namespace IFCPHP\IFC4\Type;
use IFCPHP\IFC4 as IFC;

class IfcProjectOrderTypeEnum extends IFC\Common{

	static public $params = [[
		'class' => 'Base\Value',
		'type' => 'object',
		'enum' => [
			'CHANGEORDER',
			'MAINTENANCEWORKORDER',
			'MOVEORDER',
			'PURCHASEORDER',
			'WORKORDER',
			'USERDEFINED',
			'NOTDEFINED',
		],
	]];
}
/* DEFINITION
TYPE IfcProjectOrderTypeEnum = ENUMERATION OF
(CHANGEORDER
,MAINTENANCEWORKORDER
,MOVEORDER
,PURCHASEORDER
,WORKORDER
,USERDEFINED
,NOTDEFINED);
END_TYPE;
*/
