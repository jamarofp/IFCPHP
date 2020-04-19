<?php

namespace IFCPHP\IFC4\Type;
use IFCPHP\IFC4 as IFC;

class IfcTendonTypeEnum extends IFC\Common{

	static public $elementName = 'IFCTENDONTYPEENUM';

	static public $translationFR = 'Enumération des types de cable';

	static public $params = [[
		'class' => 'Base\Value',
		'type' => 'object',
		'enum' => [
			'BAR',
			'COATED',
			'STRAND',
			'WIRE',
			'USERDEFINED',
			'NOTDEFINED',
		],
	]];
}
/* DEFINITION
TYPE IfcTendonTypeEnum = ENUMERATION OF
(BAR
,COATED
,STRAND
,WIRE
,USERDEFINED
,NOTDEFINED);
END_TYPE;
*/
