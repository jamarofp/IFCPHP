<?php

namespace IFCPHP\IFC4\Type;
use IFCPHP\IFC4 as IFC;

class IfcCommunicationsApplianceTypeEnum extends IFC\Common{

	static public $translationFR = 'Enumération des types d\'appareils de communications';

	static public $params = [[
		'class' => 'Base\Value',
		'type' => 'object',
		'enum' => [
			'ANTENNA',
			'COMPUTER',
			'FAX',
			'GATEWAY',
			'MODEM',
			'NETWORKAPPLIANCE',
			'NETWORKBRIDGE',
			'NETWORKHUB',
			'PRINTER',
			'REPEATER',
			'ROUTER',
			'SCANNER',
			'USERDEFINED',
			'NOTDEFINED',
		],
	]];
}
/* DEFINITION
TYPE IfcCommunicationsApplianceTypeEnum = ENUMERATION OF
(ANTENNA
,COMPUTER
,FAX
,GATEWAY
,MODEM
,NETWORKAPPLIANCE
,NETWORKBRIDGE
,NETWORKHUB
,PRINTER
,REPEATER
,ROUTER
,SCANNER
,USERDEFINED
,NOTDEFINED);
END_TYPE;
*/
