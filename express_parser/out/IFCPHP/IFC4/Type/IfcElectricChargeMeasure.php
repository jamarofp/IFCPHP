<?php

namespace IFCPHP\IFC4\Type;
use IFCPHP\IFC4 as IFC;

class IfcElectricChargeMeasure extends IFC\Common{

	static public $elementName = 'IFCELECTRICCHARGEMEASURE';

	static public $translationFR = 'Mesure de charge électrique';

	static public $params = [[
		'class' => 'Base\Real',
		'type' => 'object',
	]];
}
/* DEFINITION
TYPE IfcElectricChargeMeasure = REAL;
END_TYPE;
*/
