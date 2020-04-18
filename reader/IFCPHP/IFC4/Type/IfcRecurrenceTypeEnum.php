<?php

namespace IFCPHP\IFC4\Type;
use IFCPHP\IFC4 as IFC;

class IfcRecurrenceTypeEnum extends IFC\Common{

	static public $params = [[
		'class' => 'Base\Value',
		'type' => 'object',
		'enum' => [
			'DAILY',
			'WEEKLY',
			'MONTHLY_BY_DAY_OF_MONTH',
			'MONTHLY_BY_POSITION',
			'BY_DAY_COUNT',
			'BY_WEEKDAY_COUNT',
			'YEARLY_BY_DAY_OF_MONTH',
			'YEARLY_BY_POSITION',
		],
	]];
}
/* DEFINITION
TYPE IfcRecurrenceTypeEnum = ENUMERATION OF
(DAILY
,WEEKLY
,MONTHLY_BY_DAY_OF_MONTH
,MONTHLY_BY_POSITION
,BY_DAY_COUNT
,BY_WEEKDAY_COUNT
,YEARLY_BY_DAY_OF_MONTH
,YEARLY_BY_POSITION);
END_TYPE;
*/
