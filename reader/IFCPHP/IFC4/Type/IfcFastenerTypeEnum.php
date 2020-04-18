<?php

namespace IFCPHP\IFC4\Type;
use IFCPHP\IFC4 as IFC;

class IfcFastenerTypeEnum extends IFC\Common{

	static public $translationFR = 'Enumération des types d\'éléments d\'assemblage';

	static public $params = [[
		'class' => 'Base\Value',
		'type' => 'object',
		'enum' => [
			'GLUE',
			'MORTAR',
			'WELD',
			'USERDEFINED',
			'NOTDEFINED',
		],
	]];
}
/* DEFINITION
TYPE IfcFastenerTypeEnum = ENUMERATION OF
(GLUE
,MORTAR
,WELD
,USERDEFINED
,NOTDEFINED);
END_TYPE;
*/
