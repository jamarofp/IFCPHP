<?php

namespace IFCPHP\IFC4\Type;
use IFCPHP\IFC4 as IFC;

class IfcTaskDurationEnum extends IFC\Common{

	static public $translationFR = 'Enumération des types de durée de tâche';

	static public $params = [[
		'class' => 'Base\Value',
		'type' => 'object',
		'enum' => [
			'ELAPSEDTIME',
			'WORKTIME',
			'NOTDEFINED',
		],
	]];
}
/* DEFINITION
TYPE IfcTaskDurationEnum = ENUMERATION OF
(ELAPSEDTIME
,WORKTIME
,NOTDEFINED);
END_TYPE;
*/
