<?php

namespace IFCPHP\IFC4\Type;
use IFCPHP\IFC4 as IFC;

class IfcFlowMeterTypeEnum extends IFC\Common{

	static public $elementName = 'IFCFLOWMETERTYPEENUM';

	static public $translationFR = 'Enumération des types d\'appareil de mesure de débit';

	static public $params = [[
		'class' => 'Base\Value',
		'type' => 'object',
		'enum' => [
			'ENERGYMETER',
			'GASMETER',
			'OILMETER',
			'WATERMETER',
			'USERDEFINED',
			'NOTDEFINED',
		],
	]];
}
/* DEFINITION
TYPE IfcFlowMeterTypeEnum = ENUMERATION OF
(ENERGYMETER
,GASMETER
,OILMETER
,WATERMETER
,USERDEFINED
,NOTDEFINED);
END_TYPE;
*/
