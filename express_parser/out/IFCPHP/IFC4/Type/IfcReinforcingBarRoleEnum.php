<?php

namespace IFCPHP\IFC4\Type;
use IFCPHP\IFC4 as IFC;

class IfcReinforcingBarRoleEnum extends IFC\Common{

	static public $elementName = 'IFCREINFORCINGBARROLEENUM';

	static public $translationFR = 'Enumération des types d\'emploi de barres d\'armature';

	static public $params = [[
		'class' => 'Base\Value',
		'type' => 'object',
		'enum' => [
			'MAIN',
			'SHEAR',
			'LIGATURE',
			'STUD',
			'PUNCHING',
			'EDGE',
			'RING',
			'ANCHORING',
			'USERDEFINED',
			'NOTDEFINED',
		],
	]];
}
/* DEFINITION
TYPE IfcReinforcingBarRoleEnum = ENUMERATION OF
(MAIN
,SHEAR
,LIGATURE
,STUD
,PUNCHING
,EDGE
,RING
,ANCHORING
,USERDEFINED
,NOTDEFINED);
END_TYPE;
*/
