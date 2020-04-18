<?php

namespace IFCPHP\IFC4\Type;
use IFCPHP\IFC4 as IFC;

class IfcRadioActivityMeasure extends IFC\Common{

	static public $translationFR = 'Mesure de radioactivité';

	static public $params = [[
		'class' => 'Base\Real',
		'type' => 'object',
	]];
}
/* DEFINITION
TYPE IfcRadioActivityMeasure = REAL;
END_TYPE;
*/
