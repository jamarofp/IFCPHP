<?php

namespace IFCPHP\IFC4\Type;
use IFCPHP\IFC4 as IFC;

class IfcSpecificHeatCapacityMeasure extends IFC\Common{

	static public $elementName = 'IFCSPECIFICHEATCAPACITYMEASURE';

	static public $translationFR = 'Mesure de capacité thermique massique';

	static public $params = [[
		'class' => 'Base\Real',
		'type' => 'object',
	]];
}
/* DEFINITION
TYPE IfcSpecificHeatCapacityMeasure = REAL;
END_TYPE;
*/
