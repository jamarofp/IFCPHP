<?php

namespace IFCPHP\IFC4\Type;
use IFCPHP\IFC4 as IFC;

class IfcDirectionSenseEnum extends IFC\Common{

	static public $translationFR = 'Enumération des sens de direction';

	static public $params = [[
		'class' => 'Base\Value',
		'type' => 'object',
		'enum' => [
			'POSITIVE',
			'NEGATIVE',
		],
	]];
}
/* DEFINITION
TYPE IfcDirectionSenseEnum = ENUMERATION OF
(POSITIVE
,NEGATIVE);
END_TYPE;
*/
