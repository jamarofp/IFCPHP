<?php

namespace IFCPHP\IFC4\Type;
use IFCPHP\IFC4 as IFC;

class IfcKnotType extends IFC\Common{

	static public $translationFR = 'Type de nœud';

	static public $params = [[
		'class' => 'Base\Value',
		'type' => 'object',
		'enum' => [
			'UNIFORM_KNOTS',
			'QUASI_UNIFORM_KNOTS',
			'PIECEWISE_BEZIER_KNOTS',
			'UNSPECIFIED',
		],
	]];
}
/* DEFINITION
TYPE IfcKnotType = ENUMERATION OF
(UNIFORM_KNOTS
,QUASI_UNIFORM_KNOTS
,PIECEWISE_BEZIER_KNOTS
,UNSPECIFIED);
END_TYPE;
*/
