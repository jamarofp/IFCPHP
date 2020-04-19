<?php

namespace IFCPHP\IFC4\Type;
use IFCPHP\IFC4 as IFC;

class IfcPumpTypeEnum extends IFC\Common{

	static public $elementName = 'IFCPUMPTYPEENUM';

	static public $translationFR = 'Énumération des types de pompe';

	static public $params = [[
		'class' => 'Base\Value',
		'type' => 'object',
		'enum' => [
			'CIRCULATOR',
			'ENDSUCTION',
			'SPLITCASE',
			'SUBMERSIBLEPUMP',
			'SUMPPUMP',
			'VERTICALINLINE',
			'VERTICALTURBINE',
			'USERDEFINED',
			'NOTDEFINED',
		],
	]];
}
/* DEFINITION
TYPE IfcPumpTypeEnum = ENUMERATION OF
(CIRCULATOR
,ENDSUCTION
,SPLITCASE
,SUBMERSIBLEPUMP
,SUMPPUMP
,VERTICALINLINE
,VERTICALTURBINE
,USERDEFINED
,NOTDEFINED);
END_TYPE;
*/
