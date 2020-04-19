<?php

namespace IFCPHP\IFC4\Type;
use IFCPHP\IFC4 as IFC;

class IfcCostItemTypeEnum extends IFC\Common{

	static public $elementName = 'IFCCOSTITEMTYPEENUM';

	static public $translationFR = 'Enumération des types d\'items de coûts';

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
TYPE IfcCostItemTypeEnum = ENUMERATION OF
(USERDEFINED
,NOTDEFINED);
END_TYPE;
*/
