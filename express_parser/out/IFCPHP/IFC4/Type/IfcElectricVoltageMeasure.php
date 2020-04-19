<?php

namespace IFCPHP\IFC4\Type;
use IFCPHP\IFC4 as IFC;

class IfcElectricVoltageMeasure extends IFC\Common{

	static public $elementName = 'IFCELECTRICVOLTAGEMEASURE';

	static public $translationFR = 'Mesure de tension électrique';

	static public $params = [[
		'class' => 'Base\Real',
		'type' => 'object',
	]];
}
/* DEFINITION
TYPE IfcElectricVoltageMeasure = REAL;
END_TYPE;
*/
