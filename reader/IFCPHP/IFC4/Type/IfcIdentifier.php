<?php

namespace IFCPHP\IFC4\Type;
use IFCPHP\IFC4 as IFC;

class IfcIdentifier extends IFC\Common{

	static public $translationFR = 'Identifiant';

	static public $params = [[
		'class' => 'Base\Value',
		'type' => 'object',
	]];
}
/* DEFINITION
TYPE IfcIdentifier = STRING(255);
END_TYPE;
*/
