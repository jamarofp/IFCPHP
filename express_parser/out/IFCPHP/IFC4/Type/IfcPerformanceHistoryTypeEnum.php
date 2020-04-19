<?php

namespace IFCPHP\IFC4\Type;
use IFCPHP\IFC4 as IFC;

class IfcPerformanceHistoryTypeEnum extends IFC\Common{

	static public $elementName = 'IFCPERFORMANCEHISTORYTYPEENUM';

	static public $translationFR = 'Enumération des types d\'historique de performance';

	static public $params = [[
		'class' => 'Base\Value',
		'type' => 'object',
		'enum' => [
			'USERDEFINED',
			'NOTDEFINED',
		],
	]];
}
/* DEFINITION
TYPE IfcPerformanceHistoryTypeEnum = ENUMERATION OF
(USERDEFINED
,NOTDEFINED);
END_TYPE;
*/
