<?php

namespace IFCPHP\IFC4\Type;
use IFCPHP\IFC4 as IFC;

class IfcElectricDistributionBoardTypeEnum extends IFC\Common{

	static public $translationFR = 'Enumération des types de tableau de distribution électrique';

	static public $params = [[
		'class' => 'Base\Value',
		'type' => 'object',
		'enum' => [
			'CONSUMERUNIT',
			'DISTRIBUTIONBOARD',
			'MOTORCONTROLCENTRE',
			'SWITCHBOARD',
			'USERDEFINED',
			'NOTDEFINED',
		],
	]];
}
/* DEFINITION
TYPE IfcElectricDistributionBoardTypeEnum = ENUMERATION OF
(CONSUMERUNIT
,DISTRIBUTIONBOARD
,MOTORCONTROLCENTRE
,SWITCHBOARD
,USERDEFINED
,NOTDEFINED);
END_TYPE;
*/
