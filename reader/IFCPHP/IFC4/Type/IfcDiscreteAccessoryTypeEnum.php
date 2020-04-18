<?php

namespace IFCPHP\IFC4\Type;
use IFCPHP\IFC4 as IFC;

class IfcDiscreteAccessoryTypeEnum extends IFC\Common{

	static public $translationFR = 'Énumération des types d\'accessoire composé';

	static public $params = [[
		'class' => 'Base\Value',
		'type' => 'object',
		'enum' => [
			'ANCHORPLATE',
			'BRACKET',
			'SHOE',
			'USERDEFINED',
			'NOTDEFINED',
		],
	]];
}
/* DEFINITION
TYPE IfcDiscreteAccessoryTypeEnum = ENUMERATION OF
(ANCHORPLATE
,BRACKET
,SHOE
,USERDEFINED
,NOTDEFINED);
END_TYPE;
*/
