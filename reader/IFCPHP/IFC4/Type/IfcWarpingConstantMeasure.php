<?php

namespace IFCPHP\IFC4\Type;
use IFCPHP\IFC4 as IFC;

class IfcWarpingConstantMeasure extends IFC\Common{

	static public $translationFR = 'Mesure de la constante de déformation';

	static public $params = [[
		'class' => 'Base\Real',
		'type' => 'object',
	]];
}
/* DEFINITION
TYPE IfcWarpingConstantMeasure = REAL;
END_TYPE;
*/
