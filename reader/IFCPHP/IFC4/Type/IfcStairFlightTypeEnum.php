<?php

namespace IFCPHP\IFC4\Type;
use IFCPHP\IFC4 as IFC;

class IfcStairFlightTypeEnum extends IFC\Common{

	static public $translationFR = 'Énumération des types de volées d\'escalier';

	static public $params = [[
		'class' => 'Base\Value',
		'type' => 'object',
		'enum' => [
			'STRAIGHT',
			'WINDER',
			'SPIRAL',
			'CURVED',
			'FREEFORM',
			'USERDEFINED',
			'NOTDEFINED',
		],
	]];
}
/* DEFINITION
TYPE IfcStairFlightTypeEnum = ENUMERATION OF
(STRAIGHT
,WINDER
,SPIRAL
,CURVED
,FREEFORM
,USERDEFINED
,NOTDEFINED);
END_TYPE;
*/
