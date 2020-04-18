<?php

namespace IFCPHP\IFC4\Type;
use IFCPHP\IFC4 as IFC;

class IfcDoorStyleConstructionEnum extends IFC\Common{

	static public $params = [[
		'class' => 'Base\Value',
		'type' => 'object',
		'enum' => [
			'ALUMINIUM',
			'HIGH_GRADE_STEEL',
			'STEEL',
			'WOOD',
			'ALUMINIUM_WOOD',
			'ALUMINIUM_PLASTIC',
			'PLASTIC',
			'USERDEFINED',
			'NOTDEFINED',
		],
	]];
}
/* DEFINITION
TYPE IfcDoorStyleConstructionEnum = ENUMERATION OF
(ALUMINIUM
,HIGH_GRADE_STEEL
,STEEL
,WOOD
,ALUMINIUM_WOOD
,ALUMINIUM_PLASTIC
,PLASTIC
,USERDEFINED
,NOTDEFINED);
END_TYPE;
*/
