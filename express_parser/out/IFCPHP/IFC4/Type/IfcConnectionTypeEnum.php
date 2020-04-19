<?php

namespace IFCPHP\IFC4\Type;
use IFCPHP\IFC4 as IFC;

class IfcConnectionTypeEnum extends IFC\Common{

	static public $elementName = 'IFCCONNECTIONTYPEENUM';

	static public $translationFR = 'Enumération des types de connection';

	static public $params = [[
		'class' => 'Base\Value',
		'type' => 'object',
		'enum' => [
			'ATPATH',
			'ATSTART',
			'ATEND',
			'NOTDEFINED',
		],
	]];
}
/* DEFINITION
TYPE IfcConnectionTypeEnum = ENUMERATION OF
(ATPATH
,ATSTART
,ATEND
,NOTDEFINED);
END_TYPE;
*/
