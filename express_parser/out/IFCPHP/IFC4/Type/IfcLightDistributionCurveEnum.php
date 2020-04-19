<?php

namespace IFCPHP\IFC4\Type;
use IFCPHP\IFC4 as IFC;

class IfcLightDistributionCurveEnum extends IFC\Common{

	static public $elementName = 'IFCLIGHTDISTRIBUTIONCURVEENUM';

	static public $translationFR = 'Enumération des courbes de distribution lumineuse';

	static public $params = [[
		'class' => 'Base\Value',
		'type' => 'object',
		'enum' => [
			'TYPE_A',
			'TYPE_B',
			'TYPE_C',
			'NOTDEFINED',
		],
	]];
}
/* DEFINITION
TYPE IfcLightDistributionCurveEnum = ENUMERATION OF
(TYPE_A
,TYPE_B
,TYPE_C
,NOTDEFINED);
END_TYPE;
*/
