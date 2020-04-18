<?php

namespace IFCPHP\IFC4\Type;
use IFCPHP\IFC4 as IFC;

class IfcThermalAdmittanceMeasure extends IFC\Common{

	static public $translationFR = 'Mesure d\'admittance thermique';

	static public $params = [[
		'class' => 'Base\Real',
		'type' => 'object',
	]];
}
/* DEFINITION
TYPE IfcThermalAdmittanceMeasure = REAL;
END_TYPE;
*/
