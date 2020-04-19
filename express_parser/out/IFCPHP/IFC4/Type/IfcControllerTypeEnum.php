<?php

namespace IFCPHP\IFC4\Type;
use IFCPHP\IFC4 as IFC;

class IfcControllerTypeEnum extends IFC\Common{

	static public $elementName = 'IFCCONTROLLERTYPEENUM';

	static public $translationFR = 'Énumération des types d\'organes de contrôle';

	static public $params = [[
		'class' => 'Base\Value',
		'type' => 'object',
		'enum' => [
			'FLOATING',
			'PROGRAMMABLE',
			'PROPORTIONAL',
			'MULTIPOSITION',
			'TWOPOSITION',
			'USERDEFINED',
			'NOTDEFINED',
		],
	]];
}
/* DEFINITION
TYPE IfcControllerTypeEnum = ENUMERATION OF
(FLOATING
,PROGRAMMABLE
,PROPORTIONAL
,MULTIPOSITION
,TWOPOSITION
,USERDEFINED
,NOTDEFINED);
END_TYPE;
*/
