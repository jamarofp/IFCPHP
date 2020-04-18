<?php

namespace IFCPHP\IFC4\Type;
use IFCPHP\IFC4 as IFC;

class IfcCableSegmentTypeEnum extends IFC\Common{

	static public $translationFR = 'Énumération des types de segment de cable';

	static public $params = [[
		'class' => 'Base\Value',
		'type' => 'object',
		'enum' => [
			'BUSBARSEGMENT',
			'CABLESEGMENT',
			'CONDUCTORSEGMENT',
			'CORESEGMENT',
			'USERDEFINED',
			'NOTDEFINED',
		],
	]];
}
/* DEFINITION
TYPE IfcCableSegmentTypeEnum = ENUMERATION OF
(BUSBARSEGMENT
,CABLESEGMENT
,CONDUCTORSEGMENT
,CORESEGMENT
,USERDEFINED
,NOTDEFINED);
END_TYPE;
*/
