<?php

namespace IFCPHP\IFC4\Type;
use IFCPHP\IFC4 as IFC;

class IfcPlaneAngleMeasure extends IFC\Common{

	static public $elementName = 'IFCPLANEANGLEMEASURE';

	static public $translationFR = 'Mesure d\'angle plan';

	static public $params = [[
		'class' => 'Base\Real',
		'type' => 'object',
	]];
}
/* DEFINITION
TYPE IfcPlaneAngleMeasure = REAL;
END_TYPE;
*/
