<?php

namespace IFCPHP\IFC4\Type;
use IFCPHP\IFC4 as IFC;

class IfcNormalisedRatioMeasure extends IFC\Common{

	static public $elementName = 'IFCNORMALISEDRATIOMEASURE';

	static public $translationFR = 'Mesure de ratio normé';

	static public $params = [[
		'class' => 'Base\Real',
		'type' => 'object',
	]];
}
/* DEFINITION
TYPE IfcNormalisedRatioMeasure = IfcRatioMeasure;
WHERE
WR1 : {0.0 <= SELF <= 1.0};
END_TYPE;
*/
