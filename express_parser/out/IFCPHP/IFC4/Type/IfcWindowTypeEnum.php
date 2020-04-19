<?php

namespace IFCPHP\IFC4\Type;
use IFCPHP\IFC4 as IFC;

class IfcWindowTypeEnum extends IFC\Common{

	static public $elementName = 'IFCWINDOWTYPEENUM';

	static public $translationFR = 'Énumération des types de fenêtre';

	static public $params = [[
		'class' => 'Base\Value',
		'type' => 'object',
		'enum' => [
			'WINDOW',
			'SKYLIGHT',
			'LIGHTDOME',
			'USERDEFINED',
			'NOTDEFINED',
		],
	]];
}
/* DEFINITION
TYPE IfcWindowTypeEnum = ENUMERATION OF
(WINDOW
,SKYLIGHT
,LIGHTDOME
,USERDEFINED
,NOTDEFINED);
END_TYPE;
*/
