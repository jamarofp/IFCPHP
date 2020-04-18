<?php

namespace IFCPHP\IFC4\Type;
use IFCPHP\IFC4 as IFC;

class IfcMassPerLengthMeasure extends IFC\Common{

	static public $translationFR = 'Mesure de masse par unité de longueur';

	static public $params = [[
		'class' => 'Base\Real',
		'type' => 'object',
	]];
}
/* DEFINITION
TYPE IfcMassPerLengthMeasure = REAL;
END_TYPE;
*/
