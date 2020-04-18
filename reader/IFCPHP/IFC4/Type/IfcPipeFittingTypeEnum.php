<?php

namespace IFCPHP\IFC4\Type;
use IFCPHP\IFC4 as IFC;

class IfcPipeFittingTypeEnum extends IFC\Common{

	static public $translationFR = 'Enumération des types de raccord de tuyauterie';

	static public $params = [[
		'class' => 'Base\Value',
		'type' => 'object',
		'enum' => [
			'BEND',
			'CONNECTOR',
			'ENTRY',
			'EXIT',
			'JUNCTION',
			'OBSTRUCTION',
			'TRANSITION',
			'USERDEFINED',
			'NOTDEFINED',
		],
	]];
}
/* DEFINITION
TYPE IfcPipeFittingTypeEnum = ENUMERATION OF
(BEND
,CONNECTOR
,ENTRY
,EXIT
,JUNCTION
,OBSTRUCTION
,TRANSITION
,USERDEFINED
,NOTDEFINED);
END_TYPE;
*/
