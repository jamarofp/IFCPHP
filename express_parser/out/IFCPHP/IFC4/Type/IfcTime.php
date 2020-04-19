<?php

namespace IFCPHP\IFC4\Type;
use IFCPHP\IFC4 as IFC;

class IfcTime extends IFC\Common{

	static public $elementName = 'IFCTIME';

	static public $translationFR = 'Temps';

	static public $params = [[
		'class' => 'Base\Value',
		'type' => 'object',
	]];
}
/* DEFINITION
TYPE IfcTime = STRING;
END_TYPE;
*/
