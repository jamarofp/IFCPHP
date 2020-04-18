<?php

namespace IFCPHP\IFC4\Type;
use IFCPHP\IFC4 as IFC;

class IfcCurvatureMeasure extends IFC\Common{

	static public $translationFR = 'Mesure de courbature';

	static public $params = [[
		'class' => 'Base\Real',
		'type' => 'object',
	]];
}
/* DEFINITION
TYPE IfcCurvatureMeasure = REAL;
END_TYPE;
*/
