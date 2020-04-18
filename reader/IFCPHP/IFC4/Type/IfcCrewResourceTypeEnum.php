<?php

namespace IFCPHP\IFC4\Type;
use IFCPHP\IFC4 as IFC;

class IfcCrewResourceTypeEnum extends IFC\Common{

	static public $translationFR = 'Énumération des types d\'équipe';

	static public $params = [[
		'class' => 'Base\Value',
		'type' => 'object',
		'enum' => [
			'OFFICE',
			'SITE',
			'USERDEFINED',
			'NOTDEFINED',
		],
	]];
}
/* DEFINITION
TYPE IfcCrewResourceTypeEnum = ENUMERATION OF
(OFFICE
,SITE
,USERDEFINED
,NOTDEFINED);
END_TYPE;
*/
