<?php

namespace IFCPHP\IFC4\Type;
use IFCPHP\IFC4 as IFC;

class IfcRotationalMassMeasure extends IFC\Common{

	static public $translationFR = 'Mesure de masse ';

	static public $params = [[
		'class' => 'Base\Real',
		'type' => 'object',
	]];
}
/* DEFINITION
TYPE IfcRotationalMassMeasure = REAL;
END_TYPE;
*/
