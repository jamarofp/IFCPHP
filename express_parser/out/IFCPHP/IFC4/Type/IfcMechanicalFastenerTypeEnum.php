<?php

namespace IFCPHP\IFC4\Type;
use IFCPHP\IFC4 as IFC;

class IfcMechanicalFastenerTypeEnum extends IFC\Common{

	static public $elementName = 'IFCMECHANICALFASTENERTYPEENUM';

	static public $params = [[
		'class' => 'Base\Value',
		'type' => 'object',
		'enum' => [
			'ANCHORBOLT',
			'BOLT',
			'DOWEL',
			'NAIL',
			'NAILPLATE',
			'RIVET',
			'SCREW',
			'SHEARCONNECTOR',
			'STAPLE',
			'STUDSHEARCONNECTOR',
			'USERDEFINED',
			'NOTDEFINED',
		],
	]];
}
/* DEFINITION
TYPE IfcMechanicalFastenerTypeEnum = ENUMERATION OF
(ANCHORBOLT
,BOLT
,DOWEL
,NAIL
,NAILPLATE
,RIVET
,SCREW
,SHEARCONNECTOR
,STAPLE
,STUDSHEARCONNECTOR
,USERDEFINED
,NOTDEFINED);
END_TYPE;
*/
