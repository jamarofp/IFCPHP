<?php

namespace IFCPHP\IFC4\Type;
use IFCPHP\IFC4 as IFC;

class IfcStructuralCurveMemberTypeEnum extends IFC\Common{

	static public $elementName = 'IFCSTRUCTURALCURVEMEMBERTYPEENUM';

	static public $params = [[
		'class' => 'Base\Value',
		'type' => 'object',
		'enum' => [
			'RIGID_JOINED_MEMBER',
			'PIN_JOINED_MEMBER',
			'CABLE',
			'TENSION_MEMBER',
			'COMPRESSION_MEMBER',
			'USERDEFINED',
			'NOTDEFINED',
		],
	]];
}
/* DEFINITION
TYPE IfcStructuralCurveMemberTypeEnum = ENUMERATION OF
(RIGID_JOINED_MEMBER
,PIN_JOINED_MEMBER
,CABLE
,TENSION_MEMBER
,COMPRESSION_MEMBER
,USERDEFINED
,NOTDEFINED);
END_TYPE;
*/
