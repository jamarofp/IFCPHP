<?php

namespace IFCPHP\IFC4\Type;
use IFCPHP\IFC4 as IFC;

class IfcProjectedOrTrueLengthEnum extends IFC\Common{

	static public $elementName = 'IFCPROJECTEDORTRUELENGTHENUM';

	static public $params = [[
		'class' => 'Base\Value',
		'type' => 'object',
		'enum' => [
			'PROJECTED_LENGTH',
			'TRUE_LENGTH',
		],
	]];
}
/* DEFINITION
TYPE IfcProjectedOrTrueLengthEnum = ENUMERATION OF
(PROJECTED_LENGTH
,TRUE_LENGTH);
END_TYPE;
*/
