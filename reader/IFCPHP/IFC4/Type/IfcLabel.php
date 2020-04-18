<?php

namespace IFCPHP\IFC4\Type;
use IFCPHP\IFC4 as IFC;

class IfcLabel extends IFC\Common{

	static public $translationFR = 'Étiquette';

	static public $params = [[
		'class' => 'Base\Value',
		'type' => 'object',
	]];
}
/* DEFINITION
TYPE IfcLabel = STRING(255);
END_TYPE;
*/
