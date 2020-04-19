<?php

namespace IFCPHP\IFC4\Type;
use IFCPHP\IFC4 as IFC;

class IfcWorkScheduleTypeEnum extends IFC\Common{

	static public $elementName = 'IFCWORKSCHEDULETYPEENUM';

	static public $translationFR = 'Enumération des types de tache unitaire de travai';

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
TYPE IfcWorkScheduleTypeEnum = ENUMERATION OF
(ACTUAL
,BASELINE
,PLANNED
,USERDEFINED
,NOTDEFINED);
END_TYPE;
*/
