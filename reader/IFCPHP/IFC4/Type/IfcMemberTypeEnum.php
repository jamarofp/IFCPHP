<?php

namespace IFCPHP\IFC4\Type;
use IFCPHP\IFC4 as IFC;

class IfcMemberTypeEnum extends IFC\Common{

	static public $translationFR = 'Enumération des types de membre';

	static public $params = [[
		'class' => 'Base\Value',
		'type' => 'object',
		'enum' => [
			'BRACE',
			'CHORD',
			'COLLAR',
			'MEMBER',
			'MULLION',
			'PLATE',
			'POST',
			'PURLIN',
			'RAFTER',
			'STRINGER',
			'STRUT',
			'STUD',
			'USERDEFINED',
			'NOTDEFINED',
		],
	]];
}
/* DEFINITION
TYPE IfcMemberTypeEnum = ENUMERATION OF
(BRACE
,CHORD
,COLLAR
,MEMBER
,MULLION
,PLATE
,POST
,PURLIN
,RAFTER
,STRINGER
,STRUT
,STUD
,USERDEFINED
,NOTDEFINED);
END_TYPE;
*/
