<?php

namespace IFCPHP\IFC4\Type;
use IFCPHP\IFC4 as IFC;

class IfcCostScheduleTypeEnum extends IFC\Common{

	static public $translationFR = 'Énumération des types de coût unitaire';

	static public $params = [[
		'class' => 'Base\Value',
		'type' => 'object',
		'enum' => [
			'BUDGET',
			'COSTPLAN',
			'ESTIMATE',
			'TENDER',
			'PRICEDBILLOFQUANTITIES',
			'UNPRICEDBILLOFQUANTITIES',
			'SCHEDULEOFRATES',
			'USERDEFINED',
			'NOTDEFINED',
		],
	]];
}
/* DEFINITION
TYPE IfcCostScheduleTypeEnum = ENUMERATION OF
(BUDGET
,COSTPLAN
,ESTIMATE
,TENDER
,PRICEDBILLOFQUANTITIES
,UNPRICEDBILLOFQUANTITIES
,SCHEDULEOFRATES
,USERDEFINED
,NOTDEFINED);
END_TYPE;
*/
