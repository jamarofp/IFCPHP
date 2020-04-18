<?php

namespace IFCPHP\IFC4\Type;
use IFCPHP\IFC4 as IFC;

class IfcCableCarrierSegmentTypeEnum extends IFC\Common{

	static public $translationFR = 'Énumération des types de segment de chemin de cable';

	static public $params = [[
		'class' => 'Base\Value',
		'type' => 'object',
		'enum' => [
			'CABLELADDERSEGMENT',
			'CABLETRAYSEGMENT',
			'CABLETRUNKINGSEGMENT',
			'CONDUITSEGMENT',
			'USERDEFINED',
			'NOTDEFINED',
		],
	]];
}
/* DEFINITION
TYPE IfcCableCarrierSegmentTypeEnum = ENUMERATION OF
(CABLELADDERSEGMENT
,CABLETRAYSEGMENT
,CABLETRUNKINGSEGMENT
,CONDUITSEGMENT
,USERDEFINED
,NOTDEFINED);
END_TYPE;
*/
