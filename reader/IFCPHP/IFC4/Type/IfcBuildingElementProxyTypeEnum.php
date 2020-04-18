<?php

namespace IFCPHP\IFC4\Type;
use IFCPHP\IFC4 as IFC;

class IfcBuildingElementProxyTypeEnum extends IFC\Common{

	static public $translationFR = 'Enumération des types d\'éléments de construction non définis';

	static public $params = [[
		'class' => 'Base\Value',
		'type' => 'object',
		'enum' => [
			'COMPLEX',
			'ELEMENT',
			'PARTIAL',
			'PROVISIONFORVOID',
			'USERDEFINED',
			'NOTDEFINED',
		],
	]];
}
/* DEFINITION
TYPE IfcBuildingElementProxyTypeEnum = ENUMERATION OF
(COMPLEX
,ELEMENT
,PARTIAL
,PROVISIONFORVOID
,USERDEFINED
,NOTDEFINED);
END_TYPE;
*/
