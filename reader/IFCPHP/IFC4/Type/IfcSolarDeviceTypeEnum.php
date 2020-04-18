<?php

namespace IFCPHP\IFC4\Type;
use IFCPHP\IFC4 as IFC;

class IfcSolarDeviceTypeEnum extends IFC\Common{

	static public $translationFR = 'Enumération des types de capteur solaire';

	static public $params = [[
		'class' => 'Base\Value',
		'type' => 'object',
		'enum' => [
			'SOLARCOLLECTOR',
			'SOLARPANEL',
			'USERDEFINED',
			'NOTDEFINED',
		],
	]];
}
/* DEFINITION
TYPE IfcSolarDeviceTypeEnum = ENUMERATION OF
(SOLARCOLLECTOR
,SOLARPANEL
,USERDEFINED
,NOTDEFINED);
END_TYPE;
*/
