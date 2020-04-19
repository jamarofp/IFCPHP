<?php

namespace IFCPHP\IFC4\Type;
use IFCPHP\IFC4 as IFC;

class IfcFlowInstrumentTypeEnum extends IFC\Common{

	static public $elementName = 'IFCFLOWINSTRUMENTTYPEENUM';

	static public $translationFR = 'Enumération des types d\'instrument d\'installation fluides';

	static public $params = [[
		'class' => 'Base\Value',
		'type' => 'object',
		'enum' => [
			'PRESSUREGAUGE',
			'THERMOMETER',
			'AMMETER',
			'FREQUENCYMETER',
			'POWERFACTORMETER',
			'PHASEANGLEMETER',
			'VOLTMETER_PEAK',
			'VOLTMETER_RMS',
			'USERDEFINED',
			'NOTDEFINED',
		],
	]];
}
/* DEFINITION
TYPE IfcFlowInstrumentTypeEnum = ENUMERATION OF
(PRESSUREGAUGE
,THERMOMETER
,AMMETER
,FREQUENCYMETER
,POWERFACTORMETER
,PHASEANGLEMETER
,VOLTMETER_PEAK
,VOLTMETER_RMS
,USERDEFINED
,NOTDEFINED);
END_TYPE;
*/
