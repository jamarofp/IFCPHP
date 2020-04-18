<?php

namespace IFCPHP\IFC4\Type;
use IFCPHP\IFC4 as IFC;

class IfcTorqueMeasure extends IFC\Common{

	static public $translationFR = 'Mesure de moment';

	static public $params = [[
		'class' => 'Base\Real',
		'type' => 'object',
	]];
}
/* DEFINITION
TYPE IfcTorqueMeasure = REAL;
END_TYPE;
*/
