<?php

namespace IFCPHP\IFC4\Type;
use IFCPHP\IFC4 as IFC;

class IfcSpaceTypeEnum extends IFC\Common{

	static public $elementName = 'IFCSPACETYPEENUM';

	static public $translationFR = 'Enumération des types de locaux';

	static public $params = [[
		'class' => 'Base\Value',
		'type' => 'object',
		'enum' => [
			'SPACE',
			'PARKING',
			'GFA',
			'INTERNAL',
			'EXTERNAL',
			'USERDEFINED',
			'NOTDEFINED',
		],
	]];
}
/* DEFINITION
TYPE IfcSpaceTypeEnum = ENUMERATION OF
(SPACE
,PARKING
,GFA
,INTERNAL
,EXTERNAL
,USERDEFINED
,NOTDEFINED);
END_TYPE;
*/
