<?php

namespace IFCPHP\IFC4\Type;
use IFCPHP\IFC4 as IFC;

class IfcSectionModulusMeasure extends IFC\Common{

	static public $elementName = 'IFCSECTIONMODULUSMEASURE';

	static public $params = [[
		'class' => 'Base\Real',
		'type' => 'object',
	]];
}
/* DEFINITION
TYPE IfcSectionModulusMeasure = REAL;
END_TYPE;
*/
