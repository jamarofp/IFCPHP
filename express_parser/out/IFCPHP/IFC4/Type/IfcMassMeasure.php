<?php

namespace IFCPHP\IFC4\Type;
use IFCPHP\IFC4 as IFC;

class IfcMassMeasure extends IFC\Common{

	static public $elementName = 'IFCMASSMEASURE';

	static public $translationFR = 'Mesure de masse';

	static public $params = [[
		'class' => 'Base\Real',
		'type' => 'object',
	]];
}
/* DEFINITION
TYPE IfcMassMeasure = REAL;
END_TYPE;
*/
