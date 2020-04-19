<?php

namespace IFCPHP\IFC4\Type;
use IFCPHP\IFC4 as IFC;

class IfcAreaMeasure extends IFC\Common{

	static public $elementName = 'IFCAREAMEASURE';

	static public $translationFR = 'Mesure d\'aire';

	static public $params = [[
		'class' => 'Base\Real',
		'type' => 'object',
	]];
}
/* DEFINITION
TYPE IfcAreaMeasure = REAL;
END_TYPE;
*/
