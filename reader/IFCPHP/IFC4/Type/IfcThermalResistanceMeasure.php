<?php

namespace IFCPHP\IFC4\Type;
use IFCPHP\IFC4 as IFC;

class IfcThermalResistanceMeasure extends IFC\Common{

	static public $translationFR = 'mesure de résistance thermique';

	static public $params = [[
		'class' => 'Base\Real',
		'type' => 'object',
	]];
}
/* DEFINITION
TYPE IfcThermalResistanceMeasure = REAL;
END_TYPE;
*/
