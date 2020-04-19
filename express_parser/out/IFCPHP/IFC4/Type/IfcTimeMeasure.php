<?php

namespace IFCPHP\IFC4\Type;
use IFCPHP\IFC4 as IFC;

class IfcTimeMeasure extends IFC\Common{

	static public $elementName = 'IFCTIMEMEASURE';

	static public $translationFR = 'Mesure du temps';

	static public $params = [[
		'class' => 'Base\Real',
		'type' => 'object',
	]];
}
/* DEFINITION
TYPE IfcTimeMeasure = REAL;
END_TYPE;
*/
