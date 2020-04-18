<?php

namespace IFCPHP\IFC4\Type;
use IFCPHP\IFC4 as IFC;

class IfcNumericMeasure extends IFC\Common{

	static public $translationFR = 'Mesure numérique';

	static public $params = [[
		'class' => 'Base\Number',
		'type' => 'object',
	]];
}
/* DEFINITION
TYPE IfcNumericMeasure = NUMBER;
END_TYPE;
*/
