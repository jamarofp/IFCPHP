<?php

namespace IFCPHP\IFC4\Type;
use IFCPHP\IFC4 as IFC;

class IfcLinearForceMeasure extends IFC\Common{

	static public $elementName = 'IFCLINEARFORCEMEASURE';

	static public $translationFR = 'Mesure de force linéaire';

	static public $params = [[
		'class' => 'Base\Real',
		'type' => 'object',
	]];
}
/* DEFINITION
TYPE IfcLinearForceMeasure = REAL;
END_TYPE;
*/
