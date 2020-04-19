<?php

namespace IFCPHP\IFC4\Type;
use IFCPHP\IFC4 as IFC;

class IfcProfileTypeEnum extends IFC\Common{

	static public $elementName = 'IFCPROFILETYPEENUM';

	static public $translationFR = 'Enumération des types de profi';

	static public $params = [[
		'class' => 'Base\Value',
		'type' => 'object',
		'enum' => [
			'CURVE',
			'AREA',
		],
	]];
}
/* DEFINITION
TYPE IfcProfileTypeEnum = ENUMERATION OF
(CURVE
,AREA);
END_TYPE;
*/
