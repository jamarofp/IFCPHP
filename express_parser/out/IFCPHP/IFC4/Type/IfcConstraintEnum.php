<?php

namespace IFCPHP\IFC4\Type;
use IFCPHP\IFC4 as IFC;

class IfcConstraintEnum extends IFC\Common{

	static public $elementName = 'IFCCONSTRAINTENUM';

	static public $translationFR = 'Enumération des types de contrainte';

	static public $params = [[
		'class' => 'Base\Value',
		'type' => 'object',
		'enum' => [
			'HARD',
			'SOFT',
			'ADVISORY',
			'USERDEFINED',
			'NOTDEFINED',
		],
	]];
}
/* DEFINITION
TYPE IfcConstraintEnum = ENUMERATION OF
(HARD
,SOFT
,ADVISORY
,USERDEFINED
,NOTDEFINED);
END_TYPE;
*/
