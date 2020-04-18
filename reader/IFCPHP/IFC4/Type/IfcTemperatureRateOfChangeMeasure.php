<?php

namespace IFCPHP\IFC4\Type;
use IFCPHP\IFC4 as IFC;

class IfcTemperatureRateOfChangeMeasure extends IFC\Common{

	static public $translationFR = 'Mesure de la variation temporelle de température';

	static public $params = [[
		'class' => 'Base\Real',
		'type' => 'object',
	]];
}
/* DEFINITION
TYPE IfcTemperatureRateOfChangeMeasure = REAL;
END_TYPE;
*/
