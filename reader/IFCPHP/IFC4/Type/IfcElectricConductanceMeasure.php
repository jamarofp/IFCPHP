<?php

namespace IFCPHP\IFC4\Type;
use IFCPHP\IFC4 as IFC;

class IfcElectricConductanceMeasure extends IFC\Common{

	static public $translationFR = 'Mesure de conductance électrique';

	static public $params = [[
		'class' => 'Base\Real',
		'type' => 'object',
	]];
}
/* DEFINITION
TYPE IfcElectricConductanceMeasure = REAL;
END_TYPE;
*/
