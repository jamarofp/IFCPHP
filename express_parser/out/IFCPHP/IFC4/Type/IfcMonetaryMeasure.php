<?php

namespace IFCPHP\IFC4\Type;
use IFCPHP\IFC4 as IFC;

class IfcMonetaryMeasure extends IFC\Common{

	static public $elementName = 'IFCMONETARYMEASURE';

	static public $translationFR = 'Mesure monétaire';

	static public $params = [[
		'class' => 'Base\Real',
		'type' => 'object',
	]];
}
/* DEFINITION
TYPE IfcMonetaryMeasure = REAL;
END_TYPE;
*/
