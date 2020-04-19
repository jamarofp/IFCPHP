<?php

namespace IFCPHP\IFC4\Type;
use IFCPHP\IFC4 as IFC;

class IfcStructuralSurfaceMemberTypeEnum extends IFC\Common{

	static public $elementName = 'IFCSTRUCTURALSURFACEMEMBERTYPEENUM';

	static public $params = [[
		'class' => 'Base\Value',
		'type' => 'object',
		'enum' => [
			'BENDING_ELEMENT',
			'MEMBRANE_ELEMENT',
			'SHELL',
			'USERDEFINED',
			'NOTDEFINED',
		],
	]];
}
/* DEFINITION
TYPE IfcStructuralSurfaceMemberTypeEnum = ENUMERATION OF
(BENDING_ELEMENT
,MEMBRANE_ELEMENT
,SHELL
,USERDEFINED
,NOTDEFINED);
END_TYPE;
*/
