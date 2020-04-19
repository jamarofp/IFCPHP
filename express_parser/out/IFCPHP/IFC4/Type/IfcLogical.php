<?php

namespace IFCPHP\IFC4\Type;
use IFCPHP\IFC4 as IFC;

class IfcLogical extends IFC\Common{

	static public $elementName = 'IFCLOGICAL';

	static public $translationFR = 'Logique';

	static public $params = [[
		'class' => 'Base\Logical',
		'type' => 'object',
	]];
}
/* DEFINITION
TYPE IfcLogical = LOGICAL;
END_TYPE;
*/
