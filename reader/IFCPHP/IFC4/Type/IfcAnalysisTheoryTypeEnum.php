<?php

namespace IFCPHP\IFC4\Type;
use IFCPHP\IFC4 as IFC;

class IfcAnalysisTheoryTypeEnum extends IFC\Common{

	static public $translationFR = 'Énumération des types de théorie analytique';

	static public $params = [[
		'class' => 'Base\Value',
		'type' => 'object',
		'enum' => [
			'FIRST_ORDER_THEORY',
			'SECOND_ORDER_THEORY',
			'THIRD_ORDER_THEORY',
			'FULL_NONLINEAR_THEORY',
			'USERDEFINED',
			'NOTDEFINED',
		],
	]];
}
/* DEFINITION
TYPE IfcAnalysisTheoryTypeEnum = ENUMERATION OF
(FIRST_ORDER_THEORY
,SECOND_ORDER_THEORY
,THIRD_ORDER_THEORY
,FULL_NONLINEAR_THEORY
,USERDEFINED
,NOTDEFINED);
END_TYPE;
*/
