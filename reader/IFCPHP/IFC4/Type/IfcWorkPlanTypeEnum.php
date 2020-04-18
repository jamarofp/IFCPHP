<?php

namespace IFCPHP\IFC4\Type;
use IFCPHP\IFC4 as IFC;

class IfcWorkPlanTypeEnum extends IFC\Common{

	static public $translationFR = 'Enumération des types de planning de travai';

	static public $params = [[
		'class' => 'Base\Value',
		'type' => 'object',
		'enum' => [
			'ACTUAL',
			'BASELINE',
			'PLANNED',
			'USERDEFINED',
			'NOTDEFINED',
		],
	]];
}
/* DEFINITION
TYPE IfcWorkPlanTypeEnum = ENUMERATION OF
(ACTUAL
,BASELINE
,PLANNED
,USERDEFINED
,NOTDEFINED);
END_TYPE;
*/
