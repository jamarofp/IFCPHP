<?php

namespace IFCPHP\IFC4\Type;
use IFCPHP\IFC4 as IFC;

class IfcPlateTypeEnum extends IFC\Common{

	static public $translationFR = 'Énumération des types de plaque';

	static public $params = [[
		'class' => 'Base\Value',
		'type' => 'object',
		'enum' => [
			'CURTAIN_PANEL',
			'SHEET',
			'USERDEFINED',
			'NOTDEFINED',
		],
	]];
}
/* DEFINITION
TYPE IfcPlateTypeEnum = ENUMERATION OF
(CURTAIN_PANEL
,SHEET
,USERDEFINED
,NOTDEFINED);
END_TYPE;
*/
