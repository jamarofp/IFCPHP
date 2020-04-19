<?php

namespace IFCPHP\IFC4\Type;
use IFCPHP\IFC4 as IFC;

class IfcElectricResistanceMeasure extends IFC\Common{

	static public $elementName = 'IFCELECTRICRESISTANCEMEASURE';

	static public $translationFR = 'Mesure de résistance électrique';

	static public $params = [[
		'class' => 'Base\Real',
		'type' => 'object',
	]];
}
/* DEFINITION
TYPE IfcElectricResistanceMeasure = REAL;
END_TYPE;
*/
