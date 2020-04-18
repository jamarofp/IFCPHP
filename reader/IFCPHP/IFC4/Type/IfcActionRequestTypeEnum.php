<?php

namespace IFCPHP\IFC4\Type;
use IFCPHP\IFC4 as IFC;

class IfcActionRequestTypeEnum extends IFC\Common{

	static public $translationFR = 'Énumération des types de requête d\'action';

	static public $params = [[
		'class' => 'Base\Value',
		'type' => 'object',
		'enum' => [
			'EMAIL',
			'FAX',
			'PHONE',
			'POST',
			'VERBAL',
			'USERDEFINED',
			'NOTDEFINED',
		],
	]];
}
/* DEFINITION
TYPE IfcActionRequestTypeEnum = ENUMERATION OF
(EMAIL
,FAX
,PHONE
,POST
,VERBAL
,USERDEFINED
,NOTDEFINED);
END_TYPE;
*/
