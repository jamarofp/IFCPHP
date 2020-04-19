<?php

namespace IFCPHP\IFC4\Type;
use IFCPHP\IFC4 as IFC;

class IfcCableFittingTypeEnum extends IFC\Common{

	static public $elementName = 'IFCCABLEFITTINGTYPEENUM';

	static public $translationFR = 'Enumération des types de raccord de câble';

	static public $params = [[
		'class' => 'Base\Value',
		'type' => 'object',
		'enum' => [
			'CONNECTOR',
			'ENTRY',
			'EXIT',
			'JUNCTION',
			'TRANSITION',
			'USERDEFINED',
			'NOTDEFINED',
		],
	]];
}
/* DEFINITION
TYPE IfcCableFittingTypeEnum = ENUMERATION OF
(CONNECTOR
,ENTRY
,EXIT
,JUNCTION
,TRANSITION
,USERDEFINED
,NOTDEFINED);
END_TYPE;
*/
