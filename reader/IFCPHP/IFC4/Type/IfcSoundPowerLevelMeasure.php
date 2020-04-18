<?php

namespace IFCPHP\IFC4\Type;
use IFCPHP\IFC4 as IFC;

class IfcSoundPowerLevelMeasure extends IFC\Common{

	static public $translationFR = 'Mesure de niveau de puissance acoustique';

	static public $params = [[
		'class' => 'Base\Real',
		'type' => 'object',
	]];
}
/* DEFINITION
TYPE IfcSoundPowerLevelMeasure = REAL;
END_TYPE;
*/
