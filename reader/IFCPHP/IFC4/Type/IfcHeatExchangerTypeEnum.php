<?php

namespace IFCPHP\IFC4\Type;
use IFCPHP\IFC4 as IFC;

class IfcHeatExchangerTypeEnum extends IFC\Common{

	static public $translationFR = 'Enumération des types d\'échangeur de chaleur';

	static public $params = [[
		'class' => 'Base\Value',
		'type' => 'object',
		'enum' => [
			'PLATE',
			'SHELLANDTUBE',
			'USERDEFINED',
			'NOTDEFINED',
		],
	]];
}
/* DEFINITION
TYPE IfcHeatExchangerTypeEnum = ENUMERATION OF
(PLATE
,SHELLANDTUBE
,USERDEFINED
,NOTDEFINED);
END_TYPE;
*/
