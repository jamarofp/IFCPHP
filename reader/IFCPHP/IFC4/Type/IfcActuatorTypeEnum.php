<?php

namespace IFCPHP\IFC4\Type;
use IFCPHP\IFC4 as IFC;

class IfcActuatorTypeEnum extends IFC\Common{

	static public $translationFR = 'Énumération des types d\'appareillage de commande';

	static public $params = [[
		'class' => 'Base\Value',
		'type' => 'object',
		'enum' => [
			'ELECTRICACTUATOR',
			'HANDOPERATEDACTUATOR',
			'HYDRAULICACTUATOR',
			'PNEUMATICACTUATOR',
			'THERMOSTATICACTUATOR',
			'USERDEFINED',
			'NOTDEFINED',
		],
	]];
}
/* DEFINITION
TYPE IfcActuatorTypeEnum = ENUMERATION OF
(ELECTRICACTUATOR
,HANDOPERATEDACTUATOR
,HYDRAULICACTUATOR
,PNEUMATICACTUATOR
,THERMOSTATICACTUATOR
,USERDEFINED
,NOTDEFINED);
END_TYPE;
*/
