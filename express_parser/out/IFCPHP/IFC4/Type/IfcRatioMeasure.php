<?php

namespace IFCPHP\IFC4\Type;
use IFCPHP\IFC4 as IFC;

class IfcRatioMeasure extends IFC\Common{

	static public $elementName = 'IFCRATIOMEASURE';

	static public $translationFR = 'Mesure de ratio ';

	static public $params = [[
		'class' => 'Base\Real',
		'type' => 'object',
	]];
}
/* DEFINITION
TYPE IfcRatioMeasure = REAL;
END_TYPE;
*/
