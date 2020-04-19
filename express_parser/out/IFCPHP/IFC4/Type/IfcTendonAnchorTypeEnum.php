<?php

namespace IFCPHP\IFC4\Type;
use IFCPHP\IFC4 as IFC;

class IfcTendonAnchorTypeEnum extends IFC\Common{

	static public $elementName = 'IFCTENDONANCHORTYPEENUM';

	static public $translationFR = 'Enumération des types d\'ancrage';

	static public $params = [[
		'class' => 'Base\Value',
		'type' => 'object',
		'enum' => [
			'COUPLER',
			'FIXED_END',
			'TENSIONING_END',
			'USERDEFINED',
			'NOTDEFINED',
		],
	]];
}
/* DEFINITION
TYPE IfcTendonAnchorTypeEnum = ENUMERATION OF
(COUPLER
,FIXED_END
,TENSIONING_END
,USERDEFINED
,NOTDEFINED);
END_TYPE;
*/
