<?php

namespace IFCPHP\IFC4\Type;
use IFCPHP\IFC4 as IFC;

class IfcDocumentConfidentialityEnum extends IFC\Common{

	static public $params = [[
		'class' => 'Base\Value',
		'type' => 'object',
		'enum' => [
			'PUBLIC',
			'RESTRICTED',
			'CONFIDENTIAL',
			'PERSONAL',
			'USERDEFINED',
			'NOTDEFINED',
		],
	]];
}
/* DEFINITION
TYPE IfcDocumentConfidentialityEnum = ENUMERATION OF
(PUBLIC
,RESTRICTED
,CONFIDENTIAL
,PERSONAL
,USERDEFINED
,NOTDEFINED);
END_TYPE;
*/
