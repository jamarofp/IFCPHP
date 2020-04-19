<?php

namespace IFCPHP\IFC4\Type;
use IFCPHP\IFC4 as IFC;

class IfcCoilTypeEnum extends IFC\Common{

	static public $elementName = 'IFCCOILTYPEENUM';

	static public $translationFR = 'Énumération des types de bobine';

	static public $params = [[
		'class' => 'Base\Value',
		'type' => 'object',
		'enum' => [
			'DXCOOLINGCOIL',
			'ELECTRICHEATINGCOIL',
			'GASHEATINGCOIL',
			'HYDRONICCOIL',
			'STEAMHEATINGCOIL',
			'WATERCOOLINGCOIL',
			'WATERHEATINGCOIL',
			'USERDEFINED',
			'NOTDEFINED',
		],
	]];
}
/* DEFINITION
TYPE IfcCoilTypeEnum = ENUMERATION OF
(DXCOOLINGCOIL
,ELECTRICHEATINGCOIL
,GASHEATINGCOIL
,HYDRONICCOIL
,STEAMHEATINGCOIL
,WATERCOOLINGCOIL
,WATERHEATINGCOIL
,USERDEFINED
,NOTDEFINED);
END_TYPE;
*/
