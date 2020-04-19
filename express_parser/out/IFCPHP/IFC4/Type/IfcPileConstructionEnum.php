<?php

namespace IFCPHP\IFC4\Type;
use IFCPHP\IFC4 as IFC;

class IfcPileConstructionEnum extends IFC\Common{

	static public $elementName = 'IFCPILECONSTRUCTIONENUM';

	static public $translationFR = 'Enumération des types de construction de pieux';

	static public $params = [[
		'class' => 'Base\Value',
		'type' => 'object',
		'enum' => [
			'CAST_IN_PLACE',
			'COMPOSITE',
			'PRECAST_CONCRETE',
			'PREFAB_STEEL',
			'USERDEFINED',
			'NOTDEFINED',
		],
	]];
}
/* DEFINITION
TYPE IfcPileConstructionEnum = ENUMERATION OF
(CAST_IN_PLACE
,COMPOSITE
,PRECAST_CONCRETE
,PREFAB_STEEL
,USERDEFINED
,NOTDEFINED);
END_TYPE;
*/
