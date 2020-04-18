<?php

namespace IFCPHP\IFC4\Type;
use IFCPHP\IFC4 as IFC;

class IfcAmountOfSubstanceMeasure extends IFC\Common{

	static public $translationFR = 'Mesure de quantité de substance';

	static public $params = [[
		'class' => 'Base\Real',
		'type' => 'object',
	]];
}
/* DEFINITION
TYPE IfcAmountOfSubstanceMeasure = REAL;
END_TYPE;
*/
