<?php

namespace IFCPHP\IFC4\Type;
use IFCPHP\IFC4 as IFC;

class IfcInternalOrExternalEnum extends IFC\Common{

	static public $elementName = 'IFCINTERNALOREXTERNALENUM';

	static public $translationFR = 'Intérieur ou extérieur';

	static public $params = [[
		'class' => 'Base\Value',
		'type' => 'object',
		'enum' => [
			'INTERNAL',
			'EXTERNAL',
			'EXTERNAL_EARTH',
			'EXTERNAL_WATER',
			'EXTERNAL_FIRE',
			'NOTDEFINED',
		],
	]];
}
/* DEFINITION
TYPE IfcInternalOrExternalEnum = ENUMERATION OF
(INTERNAL
,EXTERNAL
,EXTERNAL_EARTH
,EXTERNAL_WATER
,EXTERNAL_FIRE
,NOTDEFINED);
END_TYPE;
*/
