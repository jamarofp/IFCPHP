<?php

namespace IFCPHP\IFC4\Type;
use IFCPHP\IFC4 as IFC;

class IfcTubeBundleTypeEnum extends IFC\Common{

	static public $elementName = 'IFCTUBEBUNDLETYPEENUM';

	static public $translationFR = 'Enumération des types de faisceau tubulaire';

	static public $params = [[
		'class' => 'Base\Value',
		'type' => 'object',
		'enum' => [
			'FINNED',
			'USERDEFINED',
			'NOTDEFINED',
		],
	]];
}
/* DEFINITION
TYPE IfcTubeBundleTypeEnum = ENUMERATION OF
(FINNED
,USERDEFINED
,NOTDEFINED);
END_TYPE;
*/
