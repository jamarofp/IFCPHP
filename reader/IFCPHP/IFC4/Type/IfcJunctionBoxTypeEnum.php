<?php

namespace IFCPHP\IFC4\Type;
use IFCPHP\IFC4 as IFC;

class IfcJunctionBoxTypeEnum extends IFC\Common{

	static public $translationFR = 'Enumération des types de boites de jonction';

	static public $params = [[
		'class' => 'Base\Value',
		'type' => 'object',
		'enum' => [
			'DATA',
			'POWER',
			'USERDEFINED',
			'NOTDEFINED',
		],
	]];
}
/* DEFINITION
TYPE IfcJunctionBoxTypeEnum = ENUMERATION OF
(DATA
,POWER
,USERDEFINED
,NOTDEFINED);
END_TYPE;
*/
