<?php

namespace IFCPHP\IFC4\Type;
use IFCPHP\IFC4 as IFC;

class IfcThermalTransmittanceMeasure extends IFC\Common{

	static public $translationFR = 'mesure de transmittance thermique';

	static public $params = [[
		'class' => 'Base\Real',
		'type' => 'object',
	]];
}
/* DEFINITION
TYPE IfcThermalTransmittanceMeasure = REAL;
END_TYPE;
*/
