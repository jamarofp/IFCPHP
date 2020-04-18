<?php

namespace IFCPHP\IFC4\Type;
use IFCPHP\IFC4 as IFC;

class IfcSurfaceSide extends IFC\Common{

	static public $params = [[
		'class' => 'Base\Value',
		'type' => 'object',
		'enum' => [
			'POSITIVE',
			'NEGATIVE',
			'BOTH',
		],
	]];
}
/* DEFINITION
TYPE IfcSurfaceSide = ENUMERATION OF
(POSITIVE
,NEGATIVE
,BOTH);
END_TYPE;
*/
