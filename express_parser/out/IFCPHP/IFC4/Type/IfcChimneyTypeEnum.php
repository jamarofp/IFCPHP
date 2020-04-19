<?php

namespace IFCPHP\IFC4\Type;
use IFCPHP\IFC4 as IFC;

class IfcChimneyTypeEnum extends IFC\Common{

	static public $elementName = 'IFCCHIMNEYTYPEENUM';

	static public $translationFR = 'Énumération des types de cheminée';

	static public $params = [[
		'class' => 'Base\Value',
		'type' => 'object',
		'enum' => [
			'USERDEFINED',
			'NOTDEFINED',
		],
	]];
}
/* DEFINITION
TYPE IfcChimneyTypeEnum = ENUMERATION OF
(USERDEFINED
,NOTDEFINED);
END_TYPE;
*/
