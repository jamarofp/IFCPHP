<?php

namespace IFCPHP\IFC4\Type;
use IFCPHP\IFC4 as IFC;

class IfcThermalExpansionCoefficientMeasure extends IFC\Common{

	static public $elementName = 'IFCTHERMALEXPANSIONCOEFFICIENTMEASURE';

	static public $translationFR = 'Mesure du cefficient de dilatation thermique';

	static public $params = [[
		'class' => 'Base\Real',
		'type' => 'object',
	]];
}
/* DEFINITION
TYPE IfcThermalExpansionCoefficientMeasure = REAL;
END_TYPE;
*/
