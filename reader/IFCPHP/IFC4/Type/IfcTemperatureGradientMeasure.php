<?php

namespace IFCPHP\IFC4\Type;
use IFCPHP\IFC4 as IFC;

class IfcTemperatureGradientMeasure extends IFC\Common{

	static public $translationFR = 'Mesure de gradient de température';

	static public $params = [[
		'class' => 'Base\Real',
		'type' => 'object',
	]];
}
/* DEFINITION
TYPE IfcTemperatureGradientMeasure = REAL;
END_TYPE;
*/
