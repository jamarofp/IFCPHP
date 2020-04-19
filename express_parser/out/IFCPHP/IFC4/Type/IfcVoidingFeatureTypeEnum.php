<?php

namespace IFCPHP\IFC4\Type;
use IFCPHP\IFC4 as IFC;

class IfcVoidingFeatureTypeEnum extends IFC\Common{

	static public $elementName = 'IFCVOIDINGFEATURETYPEENUM';

	static public $params = [[
		'class' => 'Base\Value',
		'type' => 'object',
		'enum' => [
			'CUTOUT',
			'NOTCH',
			'HOLE',
			'MITER',
			'CHAMFER',
			'EDGE',
			'USERDEFINED',
			'NOTDEFINED',
		],
	]];
}
/* DEFINITION
TYPE IfcVoidingFeatureTypeEnum = ENUMERATION OF
(CUTOUT
,NOTCH
,HOLE
,MITER
,CHAMFER
,EDGE
,USERDEFINED
,NOTDEFINED);
END_TYPE;
*/
