<?php

namespace IFCPHP\IFC4\Type;
use IFCPHP\IFC4 as IFC;

class IfcLengthMeasure extends IFC\Common{

	static public $translationFR = 'Mesure de longueur';

	static public $params = [[
		'class' => 'Base\Real',
		'type' => 'object',
	]];
}
/* DEFINITION
TYPE IfcLengthMeasure = REAL;
END_TYPE;
*/
