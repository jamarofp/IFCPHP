<?php

namespace IFCPHP\IFC4\Type;
use IFCPHP\IFC4 as IFC;

class IfcSanitaryTerminalTypeEnum extends IFC\Common{

	static public $translationFR = 'Enumération des types d\'équipement sanitaire';

	static public $params = [[
		'class' => 'Base\Value',
		'type' => 'object',
		'enum' => [
			'BATH',
			'BIDET',
			'CISTERN',
			'SHOWER',
			'SINK',
			'SANITARYFOUNTAIN',
			'TOILETPAN',
			'URINAL',
			'WASHHANDBASIN',
			'WCSEAT',
			'USERDEFINED',
			'NOTDEFINED',
		],
	]];
}
/* DEFINITION
TYPE IfcSanitaryTerminalTypeEnum = ENUMERATION OF
(BATH
,BIDET
,CISTERN
,SHOWER
,SINK
,SANITARYFOUNTAIN
,TOILETPAN
,URINAL
,WASHHANDBASIN
,WCSEAT
,USERDEFINED
,NOTDEFINED);
END_TYPE;
*/
