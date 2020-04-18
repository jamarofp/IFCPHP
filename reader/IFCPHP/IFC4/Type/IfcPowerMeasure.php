<?php

namespace IFCPHP\IFC4\Type;
use IFCPHP\IFC4 as IFC;

class IfcPowerMeasure extends IFC\Common{

	static public $translationFR = 'Mesure de puissance';

	static public $params = [[
		'class' => 'Base\Real',
		'type' => 'object',
	]];
}
/* DEFINITION
TYPE IfcPowerMeasure = REAL;
END_TYPE;
*/
