<?php

namespace IFCPHP\IFC4\Type;
use IFCPHP\IFC4 as IFC;

class IfcTransformerTypeEnum extends IFC\Common{

	static public $elementName = 'IFCTRANSFORMERTYPEENUM';

	static public $translationFR = 'Enumération des types de transformateur';

	static public $params = [[
		'class' => 'Base\Value',
		'type' => 'object',
		'enum' => [
			'CURRENT',
			'FREQUENCY',
			'INVERTER',
			'RECTIFIER',
			'VOLTAGE',
			'USERDEFINED',
			'NOTDEFINED',
		],
	]];
}
/* DEFINITION
TYPE IfcTransformerTypeEnum = ENUMERATION OF
(CURRENT
,FREQUENCY
,INVERTER
,RECTIFIER
,VOLTAGE
,USERDEFINED
,NOTDEFINED);
END_TYPE;
*/
