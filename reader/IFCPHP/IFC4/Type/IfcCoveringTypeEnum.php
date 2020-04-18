<?php

namespace IFCPHP\IFC4\Type;
use IFCPHP\IFC4 as IFC;

class IfcCoveringTypeEnum extends IFC\Common{

	static public $translationFR = 'Énumération des types de revêtement';

	static public $params = [[
		'class' => 'Base\Value',
		'type' => 'object',
		'enum' => [
			'CEILING',
			'FLOORING',
			'CLADDING',
			'ROOFING',
			'MOLDING',
			'SKIRTINGBOARD',
			'INSULATION',
			'MEMBRANE',
			'SLEEVING',
			'WRAPPING',
			'USERDEFINED',
			'NOTDEFINED',
		],
	]];
}
/* DEFINITION
TYPE IfcCoveringTypeEnum = ENUMERATION OF
(CEILING
,FLOORING
,CLADDING
,ROOFING
,MOLDING
,SKIRTINGBOARD
,INSULATION
,MEMBRANE
,SLEEVING
,WRAPPING
,USERDEFINED
,NOTDEFINED);
END_TYPE;
*/
