<?php

namespace IFCPHP\IFC4\Type;
use IFCPHP\IFC4 as IFC;

class IfcProcedureTypeEnum extends IFC\Common{

	static public $elementName = 'IFCPROCEDURETYPEENUM';

	static public $translationFR = 'Enumération des types de procédure';

	static public $params = [[
		'class' => 'Base\Value',
		'type' => 'object',
		'enum' => [
			'ADVICE_CAUTION',
			'ADVICE_NOTE',
			'ADVICE_WARNING',
			'CALIBRATION',
			'DIAGNOSTIC',
			'SHUTDOWN',
			'STARTUP',
			'USERDEFINED',
			'NOTDEFINED',
		],
	]];
}
/* DEFINITION
TYPE IfcProcedureTypeEnum = ENUMERATION OF
(ADVICE_CAUTION
,ADVICE_NOTE
,ADVICE_WARNING
,CALIBRATION
,DIAGNOSTIC
,SHUTDOWN
,STARTUP
,USERDEFINED
,NOTDEFINED);
END_TYPE;
*/
