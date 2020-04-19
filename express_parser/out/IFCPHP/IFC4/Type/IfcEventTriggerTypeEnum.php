<?php

namespace IFCPHP\IFC4\Type;
use IFCPHP\IFC4 as IFC;

class IfcEventTriggerTypeEnum extends IFC\Common{

	static public $elementName = 'IFCEVENTTRIGGERTYPEENUM';

	static public $params = [[
		'class' => 'Base\Value',
		'type' => 'object',
		'enum' => [
			'EVENTRULE',
			'EVENTMESSAGE',
			'EVENTTIME',
			'EVENTCOMPLEX',
			'USERDEFINED',
			'NOTDEFINED',
		],
	]];
}
/* DEFINITION
TYPE IfcEventTriggerTypeEnum = ENUMERATION OF
(EVENTRULE
,EVENTMESSAGE
,EVENTTIME
,EVENTCOMPLEX
,USERDEFINED
,NOTDEFINED);
END_TYPE;
*/
