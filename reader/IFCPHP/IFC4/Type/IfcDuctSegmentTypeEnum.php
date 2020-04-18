<?php

namespace IFCPHP\IFC4\Type;
use IFCPHP\IFC4 as IFC;

class IfcDuctSegmentTypeEnum extends IFC\Common{

	static public $translationFR = 'Énumération des types de tronçon de gaine';

	static public $params = [[
		'class' => 'Base\Value',
		'type' => 'object',
		'enum' => [
			'RIGIDSEGMENT',
			'FLEXIBLESEGMENT',
			'USERDEFINED',
			'NOTDEFINED',
		],
	]];
}
/* DEFINITION
TYPE IfcDuctSegmentTypeEnum = ENUMERATION OF
(RIGIDSEGMENT
,FLEXIBLESEGMENT
,USERDEFINED
,NOTDEFINED);
END_TYPE;
*/
