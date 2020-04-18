<?php

namespace IFCPHP\IFC4\Type;
use IFCPHP\IFC4 as IFC;

class IfcBuildingElementPartTypeEnum extends IFC\Common{

	static public $translationFR = 'Enumération des types de partie d\'élément de construction';

	static public $params = [[
		'class' => 'Base\Value',
		'type' => 'object',
		'enum' => [
			'INSULATION',
			'PRECASTPANEL',
			'USERDEFINED',
			'NOTDEFINED',
		],
	]];
}
/* DEFINITION
TYPE IfcBuildingElementPartTypeEnum = ENUMERATION OF
(INSULATION
,PRECASTPANEL
,USERDEFINED
,NOTDEFINED);
END_TYPE;
*/
