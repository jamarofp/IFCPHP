<?php

namespace IFCPHP\IFC4\Type;
use IFCPHP\IFC4 as IFC;

class IfcProtectiveDeviceTrippingUnitTypeEnum extends IFC\Common{

	static public $elementName = 'IFCPROTECTIVEDEVICETRIPPINGUNITTYPEENUM';

	static public $translationFR = 'Enumération des types d\'unité de déclenchement d’équipement de protection';

	static public $params = [[
		'class' => 'Base\Value',
		'type' => 'object',
		'enum' => [
			'ELECTRONIC',
			'ELECTROMAGNETIC',
			'RESIDUALCURRENT',
			'THERMAL',
			'USERDEFINED',
			'NOTDEFINED',
		],
	]];
}
/* DEFINITION
TYPE IfcProtectiveDeviceTrippingUnitTypeEnum = ENUMERATION OF
(ELECTRONIC
,ELECTROMAGNETIC
,RESIDUALCURRENT
,THERMAL
,USERDEFINED
,NOTDEFINED);
END_TYPE;
*/
