<?php

namespace IFCPHP\IFC4\Type;
use IFCPHP\IFC4 as IFC;

class IfcSectionalAreaIntegralMeasure extends IFC\Common{

	static public $elementName = 'IFCSECTIONALAREAINTEGRALMEASURE';

	static public $params = [[
		'class' => 'Base\Real',
		'type' => 'object',
	]];
}
/* DEFINITION
TYPE IfcSectionalAreaIntegralMeasure = REAL;
END_TYPE;
*/
