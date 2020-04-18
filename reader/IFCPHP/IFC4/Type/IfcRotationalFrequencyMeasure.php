<?php

namespace IFCPHP\IFC4\Type;
use IFCPHP\IFC4 as IFC;

class IfcRotationalFrequencyMeasure extends IFC\Common{

	static public $translationFR = 'Mesure de la fréquence de rotation';

	static public $params = [[
		'class' => 'Base\Real',
		'type' => 'object',
	]];
}
/* DEFINITION
TYPE IfcRotationalFrequencyMeasure = REAL;
END_TYPE;
*/
