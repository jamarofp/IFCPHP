<?php

namespace IFCPHP\IFC4\Type;
use IFCPHP\IFC4 as IFC;

class IfcOccupantTypeEnum extends IFC\Common{

	static public $elementName = 'IFCOCCUPANTTYPEENUM';

	static public $translationFR = 'Enumération des types d\'occupant';

	static public $params = [[
		'class' => 'Base\Value',
		'type' => 'object',
		'enum' => [
			'ASSIGNEE',
			'ASSIGNOR',
			'LESSEE',
			'LESSOR',
			'LETTINGAGENT',
			'OWNER',
			'TENANT',
			'USERDEFINED',
			'NOTDEFINED',
		],
	]];
}
/* DEFINITION
TYPE IfcOccupantTypeEnum = ENUMERATION OF
(ASSIGNEE
,ASSIGNOR
,LESSEE
,LESSOR
,LETTINGAGENT
,OWNER
,TENANT
,USERDEFINED
,NOTDEFINED);
END_TYPE;
*/
