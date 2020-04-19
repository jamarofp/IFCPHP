<?php

namespace IFCPHP\IFC4\Type;
use IFCPHP\IFC4 as IFC;

class IfcPressureMeasure extends IFC\Common{

	static public $elementName = 'IFCPRESSUREMEASURE';

	static public $translationFR = 'Mesure de pression';

	static public $params = [[
		'class' => 'Base\Real',
		'type' => 'object',
	]];
}
/* DEFINITION
TYPE IfcPressureMeasure = REAL;
END_TYPE;
*/
