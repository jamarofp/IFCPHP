<?php

namespace IFCPHP\IFC4\Type;
use IFCPHP\IFC4 as IFC;

class IfcCooledBeamTypeEnum extends IFC\Common{

	static public $translationFR = 'Enumération des types de poutre froide';

	static public $params = [[
		'class' => 'Base\Value',
		'type' => 'object',
		'enum' => [
			'ACTIVE',
			'PASSIVE',
			'USERDEFINED',
			'NOTDEFINED',
		],
	]];
}
/* DEFINITION
TYPE IfcCooledBeamTypeEnum = ENUMERATION OF
(ACTIVE
,PASSIVE
,USERDEFINED
,NOTDEFINED);
END_TYPE;
*/
