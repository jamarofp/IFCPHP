<?php

namespace IFCPHP\IFC4\Type;
use IFCPHP\IFC4 as IFC;

class IfcFilterTypeEnum extends IFC\Common{

	static public $elementName = 'IFCFILTERTYPEENUM';

	static public $translationFR = 'Enumération des types de filtre';

	static public $params = [[
		'class' => 'Base\Value',
		'type' => 'object',
		'enum' => [
			'AIRPARTICLEFILTER',
			'COMPRESSEDAIRFILTER',
			'ODORFILTER',
			'OILFILTER',
			'STRAINER',
			'WATERFILTER',
			'USERDEFINED',
			'NOTDEFINED',
		],
	]];
}
/* DEFINITION
TYPE IfcFilterTypeEnum = ENUMERATION OF
(AIRPARTICLEFILTER
,COMPRESSEDAIRFILTER
,ODORFILTER
,OILFILTER
,STRAINER
,WATERFILTER
,USERDEFINED
,NOTDEFINED);
END_TYPE;
*/
