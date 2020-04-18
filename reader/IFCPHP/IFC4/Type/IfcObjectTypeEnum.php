<?php

namespace IFCPHP\IFC4\Type;
use IFCPHP\IFC4 as IFC;

class IfcObjectTypeEnum extends IFC\Common{

	static public $translationFR = 'Enumération des types d\'objet';

	static public $params = [[
		'class' => 'Base\Value',
		'type' => 'object',
		'enum' => [
			'PRODUCT',
			'PROCESS',
			'CONTROL',
			'RESOURCE',
			'ACTOR',
			'GROUP',
			'PROJECT',
			'NOTDEFINED',
		],
	]];
}
/* DEFINITION
TYPE IfcObjectTypeEnum = ENUMERATION OF
(PRODUCT
,PROCESS
,CONTROL
,RESOURCE
,ACTOR
,GROUP
,PROJECT
,NOTDEFINED);
END_TYPE;
*/
