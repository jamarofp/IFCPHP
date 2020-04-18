<?php

namespace IFCPHP\IFC4\Type;
use IFCPHP\IFC4 as IFC;

class IfcForceMeasure extends IFC\Common{

	static public $translationFR = 'Mesure de force';

	static public $params = [[
		'class' => 'Base\Real',
		'type' => 'object',
	]];
}
/* DEFINITION
TYPE IfcForceMeasure = REAL;
END_TYPE;
*/
