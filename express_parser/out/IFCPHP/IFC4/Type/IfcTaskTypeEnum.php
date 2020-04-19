<?php

namespace IFCPHP\IFC4\Type;
use IFCPHP\IFC4 as IFC;

class IfcTaskTypeEnum extends IFC\Common{

	static public $elementName = 'IFCTASKTYPEENUM';

	static public $translationFR = 'Énumération des types de tâche';

	static public $params = [[
		'class' => 'Base\Value',
		'type' => 'object',
		'enum' => [
			'ATTENDANCE',
			'CONSTRUCTION',
			'DEMOLITION',
			'DISMANTLE',
			'DISPOSAL',
			'INSTALLATION',
			'LOGISTIC',
			'MAINTENANCE',
			'MOVE',
			'OPERATION',
			'REMOVAL',
			'RENOVATION',
			'USERDEFINED',
			'NOTDEFINED',
		],
	]];
}
/* DEFINITION
TYPE IfcTaskTypeEnum = ENUMERATION OF
(ATTENDANCE
,CONSTRUCTION
,DEMOLITION
,DISMANTLE
,DISPOSAL
,INSTALLATION
,LOGISTIC
,MAINTENANCE
,MOVE
,OPERATION
,REMOVAL
,RENOVATION
,USERDEFINED
,NOTDEFINED);
END_TYPE;
*/
