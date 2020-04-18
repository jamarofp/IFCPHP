<?php

namespace IFCPHP\IFC4\Type;
use IFCPHP\IFC4 as IFC;

class IfcSoundPressureMeasure extends IFC\Common{

	static public $translationFR = 'Mesure de pression sonore';

	static public $params = [[
		'class' => 'Base\Real',
		'type' => 'object',
	]];
}
/* DEFINITION
TYPE IfcSoundPressureMeasure = REAL;
END_TYPE;
*/
