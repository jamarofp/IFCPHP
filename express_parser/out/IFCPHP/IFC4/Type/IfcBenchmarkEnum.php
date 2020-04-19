<?php

namespace IFCPHP\IFC4\Type;
use IFCPHP\IFC4 as IFC;

class IfcBenchmarkEnum extends IFC\Common{

	static public $elementName = 'IFCBENCHMARKENUM';

	static public $translationFR = 'Énumération de référence ou de base';

	static public $params = [[
		'class' => 'Base\Value',
		'type' => 'object',
		'enum' => [
			'GREATERTHAN',
			'GREATERTHANOREQUALTO',
			'LESSTHAN',
			'LESSTHANOREQUALTO',
			'EQUALTO',
			'NOTEQUALTO',
			'INCLUDES',
			'NOTINCLUDES',
			'INCLUDEDIN',
			'NOTINCLUDEDIN',
		],
	]];
}
/* DEFINITION
TYPE IfcBenchmarkEnum = ENUMERATION OF
(GREATERTHAN
,GREATERTHANOREQUALTO
,LESSTHAN
,LESSTHANOREQUALTO
,EQUALTO
,NOTEQUALTO
,INCLUDES
,NOTINCLUDES
,INCLUDEDIN
,NOTINCLUDEDIN);
END_TYPE;
*/
