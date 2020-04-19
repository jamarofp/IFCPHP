<?php

namespace IFCPHP\IFC4\Type;
use IFCPHP\IFC4 as IFC;

class IfcShadingDeviceTypeEnum extends IFC\Common{

	static public $elementName = 'IFCSHADINGDEVICETYPEENUM';

	static public $translationFR = 'Enumération des types de protection solaire';

	static public $params = [[
		'class' => 'Base\Value',
		'type' => 'object',
		'enum' => [
			'JALOUSIE',
			'SHUTTER',
			'AWNING',
			'USERDEFINED',
			'NOTDEFINED',
		],
	]];
}
/* DEFINITION
TYPE IfcShadingDeviceTypeEnum = ENUMERATION OF
(JALOUSIE
,SHUTTER
,AWNING
,USERDEFINED
,NOTDEFINED);
END_TYPE;
*/
