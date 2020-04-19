<?php

namespace IFCPHP\IFC4\Type;
use IFCPHP\IFC4 as IFC;

class IfcLampTypeEnum extends IFC\Common{

	static public $elementName = 'IFCLAMPTYPEENUM';

	static public $translationFR = 'Énumération des types de lampe';

	static public $params = [[
		'class' => 'Base\Value',
		'type' => 'object',
		'enum' => [
			'COMPACTFLUORESCENT',
			'FLUORESCENT',
			'HALOGEN',
			'HIGHPRESSUREMERCURY',
			'HIGHPRESSURESODIUM',
			'LED',
			'METALHALIDE',
			'OLED',
			'TUNGSTENFILAMENT',
			'USERDEFINED',
			'NOTDEFINED',
		],
	]];
}
/* DEFINITION
TYPE IfcLampTypeEnum = ENUMERATION OF
(COMPACTFLUORESCENT
,FLUORESCENT
,HALOGEN
,HIGHPRESSUREMERCURY
,HIGHPRESSURESODIUM
,LED
,METALHALIDE
,OLED
,TUNGSTENFILAMENT
,USERDEFINED
,NOTDEFINED);
END_TYPE;
*/
