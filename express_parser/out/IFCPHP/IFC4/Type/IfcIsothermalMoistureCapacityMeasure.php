<?php

namespace IFCPHP\IFC4\Type;
use IFCPHP\IFC4 as IFC;

class IfcIsothermalMoistureCapacityMeasure extends IFC\Common{

	static public $elementName = 'IFCISOTHERMALMOISTURECAPACITYMEASURE';

	static public $params = [[
		'class' => 'Base\Real',
		'type' => 'object',
	]];
}
/* DEFINITION
TYPE IfcIsothermalMoistureCapacityMeasure = REAL;
END_TYPE;
*/
