<?php

namespace IFCPHP\IFC4\Type;
use IFCPHP\IFC4 as IFC;

class IfcDoseEquivalentMeasure extends IFC\Common{

	static public $elementName = 'IFCDOSEEQUIVALENTMEASURE';

	static public $params = [[
		'class' => 'Base\Real',
		'type' => 'object',
	]];
}
/* DEFINITION
TYPE IfcDoseEquivalentMeasure = REAL;
END_TYPE;
*/
