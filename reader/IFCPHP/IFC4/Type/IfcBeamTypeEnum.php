<?php

namespace IFCPHP\IFC4\Type;
use IFCPHP\IFC4 as IFC;

class IfcBeamTypeEnum extends IFC\Common{

	static public $translationFR = 'Énumération des types de poutres';

	static public $params = [[
		'class' => 'Base\Value',
		'type' => 'object',
		'enum' => [
			'BEAM',
			'JOIST',
			'HOLLOWCORE',
			'LINTEL',
			'SPANDREL',
			'T_BEAM',
			'USERDEFINED',
			'NOTDEFINED',
		],
	]];
}
/* DEFINITION
TYPE IfcBeamTypeEnum = ENUMERATION OF
(BEAM
,JOIST
,HOLLOWCORE
,LINTEL
,SPANDREL
,T_BEAM
,USERDEFINED
,NOTDEFINED);
END_TYPE;
*/
