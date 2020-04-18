<?php

namespace IFCPHP\IFC4\Type;
use IFCPHP\IFC4 as IFC;

class IfcDateTime extends IFC\Common{

	static public $translationFR = 'Date et heure';

	static public $params = [[
		'class' => 'Base\Value',
		'type' => 'object',
	]];
}
/* DEFINITION
TYPE IfcDateTime = STRING;
END_TYPE;
*/
