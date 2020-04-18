<?php

namespace IFCPHP\IFC4\Type;
use IFCPHP\IFC4 as IFC;

class IfcPHMeasure extends IFC\Common{

	static public $translationFR = 'Mesure de PH';

	static public $params = [[
		'class' => 'Base\Real',
		'type' => 'object',
	]];
}
/* DEFINITION
TYPE IfcPHMeasure = REAL;
WHERE
WR21 : {0.0 <= SELF <= 14.0};
END_TYPE;
*/
