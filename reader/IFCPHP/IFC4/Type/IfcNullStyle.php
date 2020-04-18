<?php

namespace IFCPHP\IFC4\Type;
use IFCPHP\IFC4 as IFC;

class IfcNullStyle extends IFC\Common{

	static public $translationFR = 'Absence de style';

	static public $params = [[
		'class' => 'Base\Value',
		'type' => 'object',
		'enum' => [
			'NULL',
		],
	]];
}
/* DEFINITION
TYPE IfcNullStyle = ENUMERATION OF
(NULL);
END_TYPE;
*/
