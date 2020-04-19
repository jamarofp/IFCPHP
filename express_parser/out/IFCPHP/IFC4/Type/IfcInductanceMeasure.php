<?php

namespace IFCPHP\IFC4\Type;
use IFCPHP\IFC4 as IFC;

class IfcInductanceMeasure extends IFC\Common{

	static public $elementName = 'IFCINDUCTANCEMEASURE';

	static public $translationFR = 'Mesure d\'inductance';

	static public $params = [[
		'class' => 'Base\Real',
		'type' => 'object',
	]];
}
/* DEFINITION
TYPE IfcInductanceMeasure = REAL;
END_TYPE;
*/
