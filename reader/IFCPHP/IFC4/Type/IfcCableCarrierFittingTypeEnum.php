<?php

namespace IFCPHP\IFC4\Type;
use IFCPHP\IFC4 as IFC;

class IfcCableCarrierFittingTypeEnum extends IFC\Common{

	static public $translationFR = 'Enumération des types de raccord de chemin de cable';

	static public $params = [[
		'class' => 'Base\Value',
		'type' => 'object',
		'enum' => [
			'BEND',
			'CROSS',
			'REDUCER',
			'TEE',
			'USERDEFINED',
			'NOTDEFINED',
		],
	]];
}
/* DEFINITION
TYPE IfcCableCarrierFittingTypeEnum = ENUMERATION OF
(BEND
,CROSS
,REDUCER
,TEE
,USERDEFINED
,NOTDEFINED);
END_TYPE;
*/
