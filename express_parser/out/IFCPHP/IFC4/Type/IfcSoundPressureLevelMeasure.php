<?php

namespace IFCPHP\IFC4\Type;
use IFCPHP\IFC4 as IFC;

class IfcSoundPressureLevelMeasure extends IFC\Common{

	static public $elementName = 'IFCSOUNDPRESSURELEVELMEASURE';

	static public $translationFR = 'Mesure de niveau de pression sonore';

	static public $params = [[
		'class' => 'Base\Real',
		'type' => 'object',
	]];
}
/* DEFINITION
TYPE IfcSoundPressureLevelMeasure = REAL;
END_TYPE;
*/
