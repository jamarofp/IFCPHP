<?php

namespace IFCPHP\IFC4\Type;
use IFCPHP\IFC4 as IFC;

class IfcArithmeticOperatorEnum extends IFC\Common{

	static public $translationFR = 'Énumération d\'opérateur arithmétique';

	static public $params = [[
		'class' => 'Base\Value',
		'type' => 'object',
		'enum' => [
			'ADD',
			'DIVIDE',
			'MULTIPLY',
			'SUBTRACT',
		],
	]];
}
/* DEFINITION
TYPE IfcArithmeticOperatorEnum = ENUMERATION OF
(ADD
,DIVIDE
,MULTIPLY
,SUBTRACT);
END_TYPE;
*/
