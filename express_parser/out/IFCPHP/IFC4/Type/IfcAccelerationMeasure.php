<?php

namespace IFCPHP\IFC4\Type;
use IFCPHP\IFC4 as IFC;

class IfcAccelerationMeasure extends IFC\Common{

	static public $elementName = 'IFCACCELERATIONMEASURE';

	static public $translationFR = 'Mesure d\'accélération';

	static public $params = [[
		'class' => 'Base\Real',
		'type' => 'object',
	]];
}
/* DEFINITION
TYPE IfcAccelerationMeasure = REAL;
END_TYPE;
*/
