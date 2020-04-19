<?php

namespace IFCPHP\IFC4\Type;
use IFCPHP\IFC4 as IFC;

class IfcColumnTypeEnum extends IFC\Common{

	static public $elementName = 'IFCCOLUMNTYPEENUM';

	static public $translationFR = 'Énumération des types de poteau';

	static public $params = [[
		'class' => 'Base\Value',
		'type' => 'object',
		'enum' => [
			'COLUMN',
			'PILASTER',
			'USERDEFINED',
			'NOTDEFINED',
		],
	]];
}
/* DEFINITION
TYPE IfcColumnTypeEnum = ENUMERATION OF
(COLUMN
,PILASTER
,USERDEFINED
,NOTDEFINED);
END_TYPE;
*/
