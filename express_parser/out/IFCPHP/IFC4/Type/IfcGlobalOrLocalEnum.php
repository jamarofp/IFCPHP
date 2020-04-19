<?php

namespace IFCPHP\IFC4\Type;
use IFCPHP\IFC4 as IFC;

class IfcGlobalOrLocalEnum extends IFC\Common{

	static public $elementName = 'IFCGLOBALORLOCALENUM';

	static public $params = [[
		'class' => 'Base\Value',
		'type' => 'object',
		'enum' => [
			'GLOBAL_COORDS',
			'LOCAL_COORDS',
		],
	]];
}
/* DEFINITION
TYPE IfcGlobalOrLocalEnum = ENUMERATION OF
(GLOBAL_COORDS
,LOCAL_COORDS);
END_TYPE;
*/
