<?php

namespace IFCPHP\IFC4\Type;
use IFCPHP\IFC4 as IFC;

class IfcGeographicElementTypeEnum extends IFC\Common{

	static public $translationFR = 'Enumération des types d\'élément géographique';

	static public $params = [[
		'class' => 'Base\Value',
		'type' => 'object',
		'enum' => [
			'TERRAIN',
			'USERDEFINED',
			'NOTDEFINED',
		],
	]];
}
/* DEFINITION
TYPE IfcGeographicElementTypeEnum = ENUMERATION OF
(TERRAIN
,USERDEFINED
,NOTDEFINED);
END_TYPE;
*/
