<?php

namespace IFCPHP\IFC4\Entity;
use IFCPHP\IFC4 as IFC;

class IfcRecurrencePattern extends IFC\Common{

	static public $params = [
		[
			'name' => 'RecurrenceType',
			'class' => 'Type\IfcRecurrenceTypeEnum',
			'type' => 'object',
			'optional' => false,
		],
		[
			'name' => 'DayComponent',
			'class' => 'Type\IfcDayInMonthNumber',
			'type' => 'array',
			'optional' => true,
			'min' => 1,
		],
		[
			'name' => 'WeekdayComponent',
			'class' => 'Type\IfcDayInWeekNumber',
			'type' => 'array',
			'optional' => true,
			'min' => 1,
		],
		[
			'name' => 'MonthComponent',
			'class' => 'Type\IfcMonthInYearNumber',
			'type' => 'array',
			'optional' => true,
			'min' => 1,
		],
		[
			'name' => 'Position',
			'class' => 'Type\IfcInteger',
			'type' => 'object',
			'optional' => true,
		],
		[
			'name' => 'Interval',
			'class' => 'Type\IfcInteger',
			'type' => 'object',
			'optional' => true,
		],
		[
			'name' => 'Occurrences',
			'class' => 'Type\IfcInteger',
			'type' => 'object',
			'optional' => true,
		],
		[
			'name' => 'TimePeriods',
			'class' => 'Entity\IfcTimePeriod',
			'type' => 'array',
			'optional' => true,
			'min' => 1,
		],
	];
}
/* DEFINITION
ENTITY IfcRecurrencePattern;
RecurrenceType : IfcRecurrenceTypeEnum;
DayComponent : OPTIONAL SET [1:?] OF IfcDayInMonthNumber;
WeekdayComponent : OPTIONAL SET [1:?] OF IfcDayInWeekNumber;
MonthComponent : OPTIONAL SET [1:?] OF IfcMonthInYearNumber;
Position : OPTIONAL IfcInteger;
Interval : OPTIONAL IfcInteger;
Occurrences : OPTIONAL IfcInteger;
TimePeriods : OPTIONAL LIST [1:?] OF IfcTimePeriod;
END_ENTITY;
*/
