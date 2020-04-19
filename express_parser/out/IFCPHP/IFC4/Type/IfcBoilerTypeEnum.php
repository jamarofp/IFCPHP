<?php

namespace IFCPHP\IFC4\Type;
use IFCPHP\IFC4 as IFC;

class IfcBoilerTypeEnum extends IFC\Common{

	static public $elementName = 'IFCBOILERTYPEENUM';

	static public $translationFR = 'Énumération des types de chaudières';

	static public $params = [[
		'class' => 'Base\Value',
		'type' => 'object',
		'enum' => [
			'WATER',
			'STEAM',
			'USERDEFINED',
			'NOTDEFINED',
		],
	]];
}
/* DEFINITION
TYPE IfcBoilerTypeEnum = ENUMERATION OF
(WATER
,STEAM
,USERDEFINED
,NOTDEFINED);
END_TYPE;
*/
