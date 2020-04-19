<?php

namespace IFCPHP\IFC4\Type;
use IFCPHP\IFC4 as IFC;

class IfcDuration extends IFC\Common{

	static public $elementName = 'IFCDURATION';

	static public $translationFR = 'Durée';

	static public $params = [[
		'class' => 'Base\Value',
		'type' => 'object',
	]];
}
/* DEFINITION
TYPE IfcDuration = STRING;
END_TYPE;
*/
