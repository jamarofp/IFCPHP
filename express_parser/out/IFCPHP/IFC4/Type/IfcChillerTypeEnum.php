<?php

namespace IFCPHP\IFC4\Type;
use IFCPHP\IFC4 as IFC;

class IfcChillerTypeEnum extends IFC\Common{

	static public $elementName = 'IFCCHILLERTYPEENUM';

	static public $translationFR = 'Énumération des types de refroidisseurs';

	static public $params = [[
		'class' => 'Base\Value',
		'type' => 'object',
		'enum' => [
			'AIRCOOLED',
			'WATERCOOLED',
			'HEATRECOVERY',
			'USERDEFINED',
			'NOTDEFINED',
		],
	]];
}
/* DEFINITION
TYPE IfcChillerTypeEnum = ENUMERATION OF
(AIRCOOLED
,WATERCOOLED
,HEATRECOVERY
,USERDEFINED
,NOTDEFINED);
END_TYPE;
*/
