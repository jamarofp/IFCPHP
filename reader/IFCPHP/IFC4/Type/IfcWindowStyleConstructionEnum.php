<?php

namespace IFCPHP\IFC4\Type;
use IFCPHP\IFC4 as IFC;

class IfcWindowStyleConstructionEnum extends IFC\Common{

	static public $translationFR = 'Énumération de la construction du style de fenêtre';

	static public $params = [[
		'class' => 'Base\Value',
		'type' => 'object',
		'enum' => [
			'ALUMINIUM',
			'HIGH_GRADE_STEEL',
			'STEEL',
			'WOOD',
			'ALUMINIUM_WOOD',
			'PLASTIC',
			'OTHER_CONSTRUCTION',
			'NOTDEFINED',
		],
	]];
}
/* DEFINITION
TYPE IfcWindowStyleConstructionEnum = ENUMERATION OF
(ALUMINIUM
,HIGH_GRADE_STEEL
,STEEL
,WOOD
,ALUMINIUM_WOOD
,PLASTIC
,OTHER_CONSTRUCTION
,NOTDEFINED);
END_TYPE;
*/
