<?php

namespace IFCPHP\IFC4\Type;
use IFCPHP\IFC4 as IFC;

class IfcTransportElementTypeEnum extends IFC\Common{

	static public $translationFR = 'Énumération des types d\'équipement de transport';

	static public $params = [[
		'class' => 'Base\Value',
		'type' => 'object',
		'enum' => [
			'ELEVATOR',
			'ESCALATOR',
			'MOVINGWALKWAY',
			'CRANEWAY',
			'LIFTINGGEAR',
			'USERDEFINED',
			'NOTDEFINED',
		],
	]];
}
/* DEFINITION
TYPE IfcTransportElementTypeEnum = ENUMERATION OF
(ELEVATOR
,ESCALATOR
,MOVINGWALKWAY
,CRANEWAY
,LIFTINGGEAR
,USERDEFINED
,NOTDEFINED);
END_TYPE;
*/
