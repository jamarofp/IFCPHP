<?php

namespace IFCPHP\IFC4\Type;
use IFCPHP\IFC4 as IFC;

class IfcChangeActionEnum extends IFC\Common{

	static public $elementName = 'IFCCHANGEACTIONENUM';

	static public $translationFR = 'Enumération des types de changement';

	static public $params = [[
		'class' => 'Base\Value',
		'type' => 'object',
		'enum' => [
			'NOCHANGE',
			'MODIFIED',
			'ADDED',
			'DELETED',
			'NOTDEFINED',
		],
	]];
}
/* DEFINITION
TYPE IfcChangeActionEnum = ENUMERATION OF
(NOCHANGE
,MODIFIED
,ADDED
,DELETED
,NOTDEFINED);
END_TYPE;
*/
