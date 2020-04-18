<?php

namespace IFCPHP\IFC4\Type;
use IFCPHP\IFC4 as IFC;

class IfcExternalSpatialElementTypeEnum extends IFC\Common{

	static public $translationFR = 'Enumération des types d\'élément spatial extérieur';

	static public $params = [[
		'class' => 'Base\Value',
		'type' => 'object',
		'enum' => [
			'EXTERNAL',
			'EXTERNAL_EARTH',
			'EXTERNAL_WATER',
			'EXTERNAL_FIRE',
			'USERDEFINED',
			'NOTDEFIEND',
		],
	]];
}
/* DEFINITION
TYPE IfcExternalSpatialElementTypeEnum = ENUMERATION OF
(EXTERNAL
,EXTERNAL_EARTH
,EXTERNAL_WATER
,EXTERNAL_FIRE
,USERDEFINED
,NOTDEFIEND);
END_TYPE;
*/
