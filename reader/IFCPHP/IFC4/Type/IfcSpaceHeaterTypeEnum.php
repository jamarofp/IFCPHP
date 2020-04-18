<?php

namespace IFCPHP\IFC4\Type;
use IFCPHP\IFC4 as IFC;

class IfcSpaceHeaterTypeEnum extends IFC\Common{

	static public $translationFR = 'Enumération des types de radiateur';

	static public $params = [[
		'class' => 'Base\Value',
		'type' => 'object',
		'enum' => [
			'CONVECTOR',
			'RADIATOR',
			'USERDEFINED',
			'NOTDEFINED',
		],
	]];
}
/* DEFINITION
TYPE IfcSpaceHeaterTypeEnum = ENUMERATION OF
(CONVECTOR
,RADIATOR
,USERDEFINED
,NOTDEFINED);
END_TYPE;
*/
