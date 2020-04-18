<?php

namespace IFCPHP\IFC4\Type;
use IFCPHP\IFC4 as IFC;

class IfcSpecularExponent extends IFC\Common{

	static public $translationFR = 'Exposant spéculaire';

	static public $params = [[
		'class' => 'Base\Real',
		'type' => 'object',
	]];
}
/* DEFINITION
TYPE IfcSpecularExponent = REAL;
END_TYPE;
*/
