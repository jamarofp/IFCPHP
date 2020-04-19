<?php

namespace IFCPHP\IFC4\Type;
use IFCPHP\IFC4 as IFC;

class IfcElectricCurrentMeasure extends IFC\Common{

	static public $elementName = 'IFCELECTRICCURRENTMEASURE';

	static public $translationFR = 'Mesure de courant électrique';

	static public $params = [[
		'class' => 'Base\Real',
		'type' => 'object',
	]];
}
/* DEFINITION
TYPE IfcElectricCurrentMeasure = REAL;
END_TYPE;
*/
