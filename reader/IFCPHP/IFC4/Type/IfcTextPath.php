<?php

namespace IFCPHP\IFC4\Type;
use IFCPHP\IFC4 as IFC;

class IfcTextPath extends IFC\Common{

	static public $params = [[
		'class' => 'Base\Value',
		'type' => 'object',
		'enum' => [
			'LEFT',
			'RIGHT',
			'UP',
			'DOWN',
		],
	]];
}
/* DEFINITION
TYPE IfcTextPath = ENUMERATION OF
(LEFT
,RIGHT
,UP
,DOWN);
END_TYPE;
*/
