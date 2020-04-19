<?php

namespace IFCPHP\IFC4\Type;
use IFCPHP\IFC4 as IFC;

class IfcHeatingValueMeasure extends IFC\Common{

	static public $elementName = 'IFCHEATINGVALUEMEASURE';

	static public $translationFR = 'Mesure de pouvoir calorifique';

	static public $params = [[
		'class' => 'Base\Real',
		'type' => 'object',
	]];
}
/* DEFINITION
TYPE IfcHeatingValueMeasure = REAL;
WHERE
WR1 : SELF > 0.;
END_TYPE;
*/
