<?php

namespace IFCPHP\IFC4\Type;
use IFCPHP\IFC4 as IFC;

class IfcConstructionMaterialResourceTypeEnum extends IFC\Common{

	static public $translationFR = 'Énumération des types de matériaux de construction';

	static public $params = [[
		'class' => 'Base\Value',
		'type' => 'object',
		'enum' => [
			'AGGREGATES',
			'CONCRETE',
			'DRYWALL',
			'FUEL',
			'GYPSUM',
			'MASONRY',
			'METAL',
			'PLASTIC',
			'WOOD',
			'NOTDEFINED',
			'USERDEFINED',
		],
	]];
}
/* DEFINITION
TYPE IfcConstructionMaterialResourceTypeEnum = ENUMERATION OF
(AGGREGATES
,CONCRETE
,DRYWALL
,FUEL
,GYPSUM
,MASONRY
,METAL
,PLASTIC
,WOOD
,NOTDEFINED
,USERDEFINED);
END_TYPE;
*/
