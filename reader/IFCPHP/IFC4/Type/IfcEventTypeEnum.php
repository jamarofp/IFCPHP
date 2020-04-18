<?php

namespace IFCPHP\IFC4\Type;
use IFCPHP\IFC4 as IFC;

class IfcEventTypeEnum extends IFC\Common{

	static public $translationFR = 'Enumération des types d\'évènement';

	static public $params = [[
		'class' => 'Base\Value',
		'type' => 'object',
		'enum' => [
			'STARTEVENT',
			'ENDEVENT',
			'INTERMEDIATEEVENT',
			'USERDEFINED',
			'NOTDEFINED',
		],
	]];
}
/* DEFINITION
TYPE IfcEventTypeEnum = ENUMERATION OF
(STARTEVENT
,ENDEVENT
,INTERMEDIATEEVENT
,USERDEFINED
,NOTDEFINED);
END_TYPE;
*/
