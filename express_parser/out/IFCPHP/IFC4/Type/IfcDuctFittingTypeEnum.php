<?php

namespace IFCPHP\IFC4\Type;
use IFCPHP\IFC4 as IFC;

class IfcDuctFittingTypeEnum extends IFC\Common{

	static public $elementName = 'IFCDUCTFITTINGTYPEENUM';

	static public $translationFR = 'Énumération des types de raccord de gaine';

	static public $params = [[
		'class' => 'Base\Value',
		'type' => 'object',
		'enum' => [
			'BEND',
			'CONNECTOR',
			'ENTRY',
			'EXIT',
			'JUNCTION',
			'OBSTRUCTION',
			'TRANSITION',
			'USERDEFINED',
			'NOTDEFINED',
		],
	]];
}
/* DEFINITION
TYPE IfcDuctFittingTypeEnum = ENUMERATION OF
(BEND
,CONNECTOR
,ENTRY
,EXIT
,JUNCTION
,OBSTRUCTION
,TRANSITION
,USERDEFINED
,NOTDEFINED);
END_TYPE;
*/
