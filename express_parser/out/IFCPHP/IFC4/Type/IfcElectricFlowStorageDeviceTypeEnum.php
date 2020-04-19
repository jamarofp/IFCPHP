<?php

namespace IFCPHP\IFC4\Type;
use IFCPHP\IFC4 as IFC;

class IfcElectricFlowStorageDeviceTypeEnum extends IFC\Common{

	static public $elementName = 'IFCELECTRICFLOWSTORAGEDEVICETYPEENUM';

	static public $params = [[
		'class' => 'Base\Value',
		'type' => 'object',
		'enum' => [
			'BATTERY',
			'CAPACITORBANK',
			'HARMONICFILTER',
			'INDUCTORBANK',
			'UPS',
			'USERDEFINED',
			'NOTDEFINED',
		],
	]];
}
/* DEFINITION
TYPE IfcElectricFlowStorageDeviceTypeEnum = ENUMERATION OF
(BATTERY
,CAPACITORBANK
,HARMONICFILTER
,INDUCTORBANK
,UPS
,USERDEFINED
,NOTDEFINED);
END_TYPE;
*/
