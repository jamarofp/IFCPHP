<?php

namespace IFCPHP\IFC4\Type;
use IFCPHP\IFC4 as IFC;

class IfcThermodynamicTemperatureMeasure extends IFC\Common{

	static public $elementName = 'IFCTHERMODYNAMICTEMPERATUREMEASURE';

	static public $translationFR = 'mesure de temperature thermodynamique';

	static public $params = [[
		'class' => 'Base\Real',
		'type' => 'object',
	]];
}
/* DEFINITION
TYPE IfcThermodynamicTemperatureMeasure = REAL;
END_TYPE;
*/
