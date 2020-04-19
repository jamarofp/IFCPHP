<?php

namespace IFCPHP\IFC4\Type;
use IFCPHP\IFC4 as IFC;

class IfcPermitTypeEnum extends IFC\Common{

	static public $elementName = 'IFCPERMITTYPEENUM';

	static public $translationFR = 'Enumération des types de permis';

	static public $params = [[
		'class' => 'Base\Value',
		'type' => 'object',
		'enum' => [
			'ACCESS',
			'BUILDING',
			'WORK',
			'USERDEFINED',
			'NOTDEFINED',
		],
	]];
}
/* DEFINITION
TYPE IfcPermitTypeEnum = ENUMERATION OF
(ACCESS
,BUILDING
,WORK
,USERDEFINED
,NOTDEFINED);
END_TYPE;
*/
