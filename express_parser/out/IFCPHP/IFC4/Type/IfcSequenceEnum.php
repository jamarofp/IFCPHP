<?php

namespace IFCPHP\IFC4\Type;
use IFCPHP\IFC4 as IFC;

class IfcSequenceEnum extends IFC\Common{

	static public $elementName = 'IFCSEQUENCEENUM';

	static public $params = [[
		'class' => 'Base\Value',
		'type' => 'object',
		'enum' => [
			'START_START',
			'START_FINISH',
			'FINISH_START',
			'FINISH_FINISH',
			'USERDEFINED',
			'NOTDEFINED',
		],
	]];
}
/* DEFINITION
TYPE IfcSequenceEnum = ENUMERATION OF
(START_START
,START_FINISH
,FINISH_START
,FINISH_FINISH
,USERDEFINED
,NOTDEFINED);
END_TYPE;
*/
