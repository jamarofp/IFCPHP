<?php

namespace IFCPHP\IFC4\Type;
use IFCPHP\IFC4 as IFC;

class IfcIntegerCountRateMeasure extends IFC\Common{

	static public $elementName = 'IFCINTEGERCOUNTRATEMEASURE';

	static public $params = [[
		'class' => 'Base\Integer',
		'type' => 'object',
	]];
}
/* DEFINITION
TYPE IfcIntegerCountRateMeasure = INTEGER;
END_TYPE;
*/
