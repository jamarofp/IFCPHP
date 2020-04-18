<?php

namespace IFCPHP\IFC4\Type;
use IFCPHP\IFC4 as IFC;

class IfcDistributionPortTypeEnum extends IFC\Common{

	static public $translationFR = 'Enumération des types de port de distribution';

	static public $params = [[
		'class' => 'Base\Value',
		'type' => 'object',
		'enum' => [
			'CABLE',
			'CABLECARRIER',
			'DUCT',
			'PIPE',
			'USERDEFINED',
			'NOTDEFINED',
		],
	]];
}
/* DEFINITION
TYPE IfcDistributionPortTypeEnum = ENUMERATION OF
(CABLE
,CABLECARRIER
,DUCT
,PIPE
,USERDEFINED
,NOTDEFINED);
END_TYPE;
*/
