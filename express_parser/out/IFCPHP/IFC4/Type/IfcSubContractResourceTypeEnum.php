<?php

namespace IFCPHP\IFC4\Type;
use IFCPHP\IFC4 as IFC;

class IfcSubContractResourceTypeEnum extends IFC\Common{

	static public $elementName = 'IFCSUBCONTRACTRESOURCETYPEENUM';

	static public $translationFR = 'Enumération des types de  ressource de sous-traitance';

	static public $params = [[
		'class' => 'Base\Value',
		'type' => 'object',
		'enum' => [
			'PURCHASE',
			'WORK',
			'USERDEFINED',
			'NOTDEFINED',
		],
	]];
}
/* DEFINITION
TYPE IfcSubContractResourceTypeEnum = ENUMERATION OF
(PURCHASE
,WORK
,USERDEFINED
,NOTDEFINED);
END_TYPE;
*/
