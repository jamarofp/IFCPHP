<?php

namespace IFCPHP\IFC4\Type;
use IFCPHP\IFC4 as IFC;

class IfcBoolean extends IFC\Common{

	static public $elementName = 'IFCBOOLEAN';

	static public $translationFR = 'Booléen';

	static public $params = [[
		'class' => 'Base\Boolean',
		'type' => 'object',
	]];
}
/* DEFINITION
TYPE IfcBoolean = BOOLEAN;
END_TYPE;
*/
