<?php

namespace IFCPHP\IFC4\Type;
use IFCPHP\IFC4 as IFC;

class IfcStateEnum extends IFC\Common{

	static public $elementName = 'IFCSTATEENUM';

	static public $translationFR = 'Enumération des types d\'accessibilité à l\'objet';

	static public $params = [[
		'class' => 'Base\Value',
		'type' => 'object',
		'enum' => [
			'READWRITE',
			'READONLY',
			'LOCKED',
			'READWRITELOCKED',
			'READONLYLOCKED',
		],
	]];
}
/* DEFINITION
TYPE IfcStateEnum = ENUMERATION OF
(READWRITE
,READONLY
,LOCKED
,READWRITELOCKED
,READONLYLOCKED);
END_TYPE;
*/
