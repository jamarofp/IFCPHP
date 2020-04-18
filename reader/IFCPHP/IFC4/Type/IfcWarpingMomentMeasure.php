<?php

namespace IFCPHP\IFC4\Type;
use IFCPHP\IFC4 as IFC;

class IfcWarpingMomentMeasure extends IFC\Common{

	static public $translationFR = 'Mesure du moment de déformation';

	static public $params = [[
		'class' => 'Base\Real',
		'type' => 'object',
	]];
}
/* DEFINITION
TYPE IfcWarpingMomentMeasure = REAL;
END_TYPE;
*/
