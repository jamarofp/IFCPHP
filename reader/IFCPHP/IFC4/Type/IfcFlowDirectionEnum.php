<?php

namespace IFCPHP\IFC4\Type;
use IFCPHP\IFC4 as IFC;

class IfcFlowDirectionEnum extends IFC\Common{

	static public $translationFR = 'Enumération des types de contrôleur de débit';

	static public $params = [[
		'class' => 'Base\Value',
		'type' => 'object',
		'enum' => [
			'SOURCE',
			'SINK',
			'SOURCEANDSINK',
			'NOTDEFINED',
		],
	]];
}
/* DEFINITION
TYPE IfcFlowDirectionEnum = ENUMERATION OF
(SOURCE
,SINK
,SOURCEANDSINK
,NOTDEFINED);
END_TYPE;
*/
