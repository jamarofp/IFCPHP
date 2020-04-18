<?php

namespace IFCPHP\IFC4\Type;
use IFCPHP\IFC4 as IFC;

class IfcAbsorbedDoseMeasure extends IFC\Common{

	static public $params = [[
		'class' => 'Base\Real',
		'type' => 'object',
	]];
}
/* DEFINITION
TYPE IfcAbsorbedDoseMeasure = REAL;
END_TYPE;
*/
