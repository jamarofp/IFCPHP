<?php

namespace IFCPHP\IFC4\Type;
use IFCPHP\IFC4 as IFC;

class IfcSpatialZoneTypeEnum extends IFC\Common{

	static public $translationFR = 'Énumération des types de zone spatiale';

	static public $params = [[
		'class' => 'Base\Value',
		'type' => 'object',
		'enum' => [
			'CONSTRUCTION',
			'FIRESAFETY',
			'LIGHTING',
			'OCCUPANCY',
			'SECURITY',
			'THERMAL',
			'TRANSPORT',
			'VENTILATION',
			'USERDEFINED',
			'NOTDEFINED',
		],
	]];
}
/* DEFINITION
TYPE IfcSpatialZoneTypeEnum = ENUMERATION OF
(CONSTRUCTION
,FIRESAFETY
,LIGHTING
,OCCUPANCY
,SECURITY
,THERMAL
,TRANSPORT
,VENTILATION
,USERDEFINED
,NOTDEFINED);
END_TYPE;
*/
