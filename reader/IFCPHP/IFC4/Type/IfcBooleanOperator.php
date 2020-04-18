<?php

namespace IFCPHP\IFC4\Type;
use IFCPHP\IFC4 as IFC;

class IfcBooleanOperator extends IFC\Common{

	static public $translationFR = 'Opérateur booléen';

	static public $params = [[
		'class' => 'Base\Value',
		'type' => 'object',
		'enum' => [
			'UNION',
			'INTERSECTION',
			'DIFFERENCE',
		],
	]];
}
/* DEFINITION
TYPE IfcBooleanOperator = ENUMERATION OF
(UNION
,INTERSECTION
,DIFFERENCE);
END_TYPE;
*/
