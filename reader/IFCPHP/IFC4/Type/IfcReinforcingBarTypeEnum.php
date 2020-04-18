<?php

namespace IFCPHP\IFC4\Type;
use IFCPHP\IFC4 as IFC;

class IfcReinforcingBarTypeEnum extends IFC\Common{

	static public $translationFR = 'Enumération des types de barre d\'armature';

	static public $params = [[
		'class' => 'Base\Value',
		'type' => 'object',
		'enum' => [
			'ANCHORING',
			'EDGE',
			'LIGATURE',
			'MAIN',
			'PUNCHING',
			'RING',
			'SHEAR',
			'STUD',
			'USERDEFINED',
			'NOTDEFINED',
		],
	]];
}
/* DEFINITION
TYPE IfcReinforcingBarTypeEnum = ENUMERATION OF
(ANCHORING
,EDGE
,LIGATURE
,MAIN
,PUNCHING
,RING
,SHEAR
,STUD
,USERDEFINED
,NOTDEFINED);
END_TYPE;
*/
