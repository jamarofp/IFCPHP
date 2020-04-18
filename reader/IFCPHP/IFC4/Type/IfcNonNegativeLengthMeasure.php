<?php

namespace IFCPHP\IFC4\Type;
use IFCPHP\IFC4 as IFC;

class IfcNonNegativeLengthMeasure extends IFC\Common{

	static public $translationFR = 'Mesure de longueur positive ou nulle';

	static public $params = [[
		'class' => 'Base\Real',
		'type' => 'object',
	]];
}
/* DEFINITION
TYPE IfcNonNegativeLengthMeasure = IfcLengthMeasure;
WHERE
NotNegative : SELF >= 0.;
END_TYPE;
*/
