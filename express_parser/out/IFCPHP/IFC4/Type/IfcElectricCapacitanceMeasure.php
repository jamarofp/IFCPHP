<?php

namespace IFCPHP\IFC4\Type;
use IFCPHP\IFC4 as IFC;

class IfcElectricCapacitanceMeasure extends IFC\Common{

	static public $elementName = 'IFCELECTRICCAPACITANCEMEASURE';

	static public $translationFR = 'Mesure de capacité électrique';

	static public $params = [[
		'class' => 'Base\Real',
		'type' => 'object',
	]];
}
/* DEFINITION
TYPE IfcElectricCapacitanceMeasure = REAL;
END_TYPE;
*/
