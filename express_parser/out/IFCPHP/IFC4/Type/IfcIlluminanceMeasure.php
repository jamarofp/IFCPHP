<?php

namespace IFCPHP\IFC4\Type;
use IFCPHP\IFC4 as IFC;

class IfcIlluminanceMeasure extends IFC\Common{

	static public $elementName = 'IFCILLUMINANCEMEASURE';

	static public $translationFR = 'Mesure de flux lumineux';

	static public $params = [[
		'class' => 'Base\Real',
		'type' => 'object',
	]];
}
/* DEFINITION
TYPE IfcIlluminanceMeasure = REAL;
END_TYPE;
*/
