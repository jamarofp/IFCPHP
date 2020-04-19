<?php

namespace IFCPHP\IFC4\Type;
use IFCPHP\IFC4 as IFC;

class IfcBuildingSystemTypeEnum extends IFC\Common{

	static public $elementName = 'IFCBUILDINGSYSTEMTYPEENUM';

	static public $translationFR = 'Enumération des types de système';

	static public $params = [[
		'class' => 'Base\Value',
		'type' => 'object',
		'enum' => [
			'FENESTRATION',
			'FOUNDATION',
			'LOADBEARING',
			'OUTERSHELL',
			'SHADING',
			'TRANSPORT',
			'USERDEFINED',
			'NOTDEFINED',
		],
	]];
}
/* DEFINITION
TYPE IfcBuildingSystemTypeEnum = ENUMERATION OF
(FENESTRATION
,FOUNDATION
,LOADBEARING
,OUTERSHELL
,SHADING
,TRANSPORT
,USERDEFINED
,NOTDEFINED);
END_TYPE;
*/
