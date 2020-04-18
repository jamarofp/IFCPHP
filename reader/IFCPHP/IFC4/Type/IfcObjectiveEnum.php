<?php

namespace IFCPHP\IFC4\Type;
use IFCPHP\IFC4 as IFC;

class IfcObjectiveEnum extends IFC\Common{

	static public $translationFR = 'Énumération des types d\'objectif';

	static public $params = [[
		'class' => 'Base\Value',
		'type' => 'object',
		'enum' => [
			'CODECOMPLIANCE',
			'CODEWAIVER',
			'DESIGNINTENT',
			'EXTERNAL',
			'HEALTHANDSAFETY',
			'MERGECONFLICT',
			'MODELVIEW',
			'PARAMETER',
			'REQUIREMENT',
			'SPECIFICATION',
			'TRIGGERCONDITION',
			'USERDEFINED',
			'NOTDEFINED',
		],
	]];
}
/* DEFINITION
TYPE IfcObjectiveEnum = ENUMERATION OF
(CODECOMPLIANCE
,CODEWAIVER
,DESIGNINTENT
,EXTERNAL
,HEALTHANDSAFETY
,MERGECONFLICT
,MODELVIEW
,PARAMETER
,REQUIREMENT
,SPECIFICATION
,TRIGGERCONDITION
,USERDEFINED
,NOTDEFINED);
END_TYPE;
*/
