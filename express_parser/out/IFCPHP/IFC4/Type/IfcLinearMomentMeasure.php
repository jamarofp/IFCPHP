<?php

namespace IFCPHP\IFC4\Type;
use IFCPHP\IFC4 as IFC;

class IfcLinearMomentMeasure extends IFC\Common{

	static public $elementName = 'IFCLINEARMOMENTMEASURE';

	static public $translationFR = 'Mesure de moment linéaire';

	static public $params = [[
		'class' => 'Base\Real',
		'type' => 'object',
	]];
}
/* DEFINITION
TYPE IfcLinearMomentMeasure = REAL;
END_TYPE;
*/
