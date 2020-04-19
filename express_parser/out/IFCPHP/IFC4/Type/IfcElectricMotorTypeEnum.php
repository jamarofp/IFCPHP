<?php

namespace IFCPHP\IFC4\Type;
use IFCPHP\IFC4 as IFC;

class IfcElectricMotorTypeEnum extends IFC\Common{

	static public $elementName = 'IFCELECTRICMOTORTYPEENUM';

	static public $translationFR = 'Enumération des types de moteur électrique';

	static public $params = [[
		'class' => 'Base\Value',
		'type' => 'object',
		'enum' => [
			'DC',
			'INDUCTION',
			'POLYPHASE',
			'RELUCTANCESYNCHRONOUS',
			'SYNCHRONOUS',
			'USERDEFINED',
			'NOTDEFINED',
		],
	]];
}
/* DEFINITION
TYPE IfcElectricMotorTypeEnum = ENUMERATION OF
(DC
,INDUCTION
,POLYPHASE
,RELUCTANCESYNCHRONOUS
,SYNCHRONOUS
,USERDEFINED
,NOTDEFINED);
END_TYPE;
*/
