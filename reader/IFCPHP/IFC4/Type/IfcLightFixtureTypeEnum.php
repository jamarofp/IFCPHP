<?php

namespace IFCPHP\IFC4\Type;
use IFCPHP\IFC4 as IFC;

class IfcLightFixtureTypeEnum extends IFC\Common{

	static public $translationFR = 'Enumération des types de fixation de lampe';

	static public $params = [[
		'class' => 'Base\Value',
		'type' => 'object',
		'enum' => [
			'POINTSOURCE',
			'DIRECTIONSOURCE',
			'SECURITYLIGHTING',
			'USERDEFINED',
			'NOTDEFINED',
		],
	]];
}
/* DEFINITION
TYPE IfcLightFixtureTypeEnum = ENUMERATION OF
(POINTSOURCE
,DIRECTIONSOURCE
,SECURITYLIGHTING
,USERDEFINED
,NOTDEFINED);
END_TYPE;
*/
