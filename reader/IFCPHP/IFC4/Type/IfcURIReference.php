<?php

namespace IFCPHP\IFC4\Type;
use IFCPHP\IFC4 as IFC;

class IfcURIReference extends IFC\Common{

	static public $translationFR = 'Référence à une adresse Web';

	static public $params = [[
		'class' => 'Base\Value',
		'type' => 'object',
	]];
}
/* DEFINITION
TYPE IfcURIReference = STRING;
END_TYPE;
*/
