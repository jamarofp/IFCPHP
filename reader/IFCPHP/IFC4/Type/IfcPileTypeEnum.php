<?php

namespace IFCPHP\IFC4\Type;
use IFCPHP\IFC4 as IFC;

class IfcPileTypeEnum extends IFC\Common{

	static public $translationFR = 'Enumération des types de pieux';

	static public $params = [[
		'class' => 'Base\Value',
		'type' => 'object',
		'enum' => [
			'BORED',
			'DRIVEN',
			'JETGROUTING',
			'COHESION',
			'FRICTION',
			'SUPPORT',
			'USERDEFINED',
			'NOTDEFINED',
		],
	]];
}
/* DEFINITION
TYPE IfcPileTypeEnum = ENUMERATION OF
(BORED
,DRIVEN
,JETGROUTING
,COHESION
,FRICTION
,SUPPORT
,USERDEFINED
,NOTDEFINED);
END_TYPE;
*/
