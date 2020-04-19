<?php

namespace IFCPHP\IFC4\Type;
use IFCPHP\IFC4 as IFC;

class IfcAddressTypeEnum extends IFC\Common{

	static public $elementName = 'IFCADDRESSTYPEENUM';

	static public $translationFR = 'Énumération des types d\'adresses';

	static public $params = [[
		'class' => 'Base\Value',
		'type' => 'object',
		'enum' => [
			'OFFICE',
			'SITE',
			'HOME',
			'DISTRIBUTIONPOINT',
			'USERDEFINED',
		],
	]];
}
/* DEFINITION
TYPE IfcAddressTypeEnum = ENUMERATION OF
(OFFICE
,SITE
,HOME
,DISTRIBUTIONPOINT
,USERDEFINED);
END_TYPE;
*/
