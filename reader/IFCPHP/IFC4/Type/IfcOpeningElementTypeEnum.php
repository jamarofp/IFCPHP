<?php

namespace IFCPHP\IFC4\Type;
use IFCPHP\IFC4 as IFC;

class IfcOpeningElementTypeEnum extends IFC\Common{

	static public $translationFR = 'Enumération des types d\'ouverture';

	static public $params = [[
		'class' => 'Base\Value',
		'type' => 'object',
		'enum' => [
			'OPENING',
			'RECESS',
			'USERDEFINED',
			'NOTDEFINED',
		],
	]];
}
/* DEFINITION
TYPE IfcOpeningElementTypeEnum = ENUMERATION OF
(OPENING
,RECESS
,USERDEFINED
,NOTDEFINED);
END_TYPE;
*/
