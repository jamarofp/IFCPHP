<?php

namespace IFCPHP\IFC4\Type;
use IFCPHP\IFC4 as IFC;

class IfcSoundPowerMeasure extends IFC\Common{

	static public $elementName = 'IFCSOUNDPOWERMEASURE';

	static public $translationFR = 'Mesure de puissance acoustique';

	static public $params = [[
		'class' => 'Base\Real',
		'type' => 'object',
	]];
}
/* DEFINITION
TYPE IfcSoundPowerMeasure = REAL;
END_TYPE;
*/
