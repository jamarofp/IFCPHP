<?php

namespace IFCPHP\IFC4\Type;
use IFCPHP\IFC4 as IFC;

class IfcThermalConductivityMeasure extends IFC\Common{

	static public $translationFR = 'Mesure de conductivité thermique';

	static public $params = [[
		'class' => 'Base\Real',
		'type' => 'object',
	]];
}
/* DEFINITION
TYPE IfcThermalConductivityMeasure = REAL;
END_TYPE;
*/
