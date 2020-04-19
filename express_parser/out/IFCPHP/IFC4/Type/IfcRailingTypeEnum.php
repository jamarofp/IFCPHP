<?php

namespace IFCPHP\IFC4\Type;
use IFCPHP\IFC4 as IFC;

class IfcRailingTypeEnum extends IFC\Common{

	static public $elementName = 'IFCRAILINGTYPEENUM';

	static public $translationFR = 'Enumération des types de garde corps';

	static public $params = [[
		'class' => 'Base\Value',
		'type' => 'object',
		'enum' => [
			'HANDRAIL',
			'GUARDRAIL',
			'BALUSTRADE',
			'USERDEFINED',
			'NOTDEFINED',
		],
	]];
}
/* DEFINITION
TYPE IfcRailingTypeEnum = ENUMERATION OF
(HANDRAIL
,GUARDRAIL
,BALUSTRADE
,USERDEFINED
,NOTDEFINED);
END_TYPE;
*/
