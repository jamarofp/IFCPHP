<?php

namespace IFCPHP\IFC4\Type;
use IFCPHP\IFC4 as IFC;

class IfcCountMeasure extends IFC\Common{

	static public $translationFR = 'Mesure du nombre';

	static public $params = [[
		'class' => 'Base\Number',
		'type' => 'object',
	]];
}
/* DEFINITION
TYPE IfcCountMeasure = NUMBER;
END_TYPE;
*/
