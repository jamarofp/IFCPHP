<?php

namespace IFCPHP\IFC4\Type;
use IFCPHP\IFC4 as IFC;

class IfcConstructionProductResourceTypeEnum extends IFC\Common{

	static public $elementName = 'IFCCONSTRUCTIONPRODUCTRESOURCETYPEENUM';

	static public $translationFR = 'Énumération des types de ressource d\'un produit de construction';

	static public $params = [[
		'class' => 'Base\Value',
		'type' => 'object',
		'enum' => [
			'ASSEMBLY',
			'FORMWORK',
			'USERDEFINED',
			'NOTDEFINED',
		],
	]];
}
/* DEFINITION
TYPE IfcConstructionProductResourceTypeEnum = ENUMERATION OF
(ASSEMBLY
,FORMWORK
,USERDEFINED
,NOTDEFINED);
END_TYPE;
*/
