<?php

namespace IFCPHP\IFC4\Type;
use IFCPHP\IFC4 as IFC;

class IfcEnergyMeasure extends IFC\Common{

	static public $translationFR = 'Mesure d\'énergie';

	static public $params = [[
		'class' => 'Base\Real',
		'type' => 'object',
	]];
}
/* DEFINITION
TYPE IfcEnergyMeasure = REAL;
END_TYPE;
*/
