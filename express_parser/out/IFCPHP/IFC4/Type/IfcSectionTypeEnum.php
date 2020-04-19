<?php

namespace IFCPHP\IFC4\Type;
use IFCPHP\IFC4 as IFC;

class IfcSectionTypeEnum extends IFC\Common{

	static public $elementName = 'IFCSECTIONTYPEENUM';

	static public $translationFR = 'Enumération des types de section';

	static public $params = [[
		'class' => 'Base\Value',
		'type' => 'object',
		'enum' => [
			'UNIFORM',
			'TAPERED',
		],
	]];
}
/* DEFINITION
TYPE IfcSectionTypeEnum = ENUMERATION OF
(UNIFORM
,TAPERED);
END_TYPE;
*/
