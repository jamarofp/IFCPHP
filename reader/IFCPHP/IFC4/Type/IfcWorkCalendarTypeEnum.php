<?php

namespace IFCPHP\IFC4\Type;
use IFCPHP\IFC4 as IFC;

class IfcWorkCalendarTypeEnum extends IFC\Common{

	static public $translationFR = 'Enumération des types de calendrier';

	static public $params = [[
		'class' => 'Base\Value',
		'type' => 'object',
		'enum' => [
			'FIRSTSHIFT',
			'SECONDSHIFT',
			'THIRDSHIFT',
			'USERDEFINED',
			'NOTDEFINED',
		],
	]];
}
/* DEFINITION
TYPE IfcWorkCalendarTypeEnum = ENUMERATION OF
(FIRSTSHIFT
,SECONDSHIFT
,THIRDSHIFT
,USERDEFINED
,NOTDEFINED);
END_TYPE;
*/
