<?php

namespace IFCPHP\IFC4\Type;
use IFCPHP\IFC4 as IFC;

class IfcFrequencyMeasure extends IFC\Common{

	static public $elementName = 'IFCFREQUENCYMEASURE';

	static public $translationFR = 'Mesure de fréquence';

	static public $params = [[
		'class' => 'Base\Real',
		'type' => 'object',
	]];
}
/* DEFINITION
TYPE IfcFrequencyMeasure = REAL;
END_TYPE;
*/
