<?php

namespace IFCPHP\IFC4\Entity;
use IFCPHP\IFC4 as IFC;

class IfcResourceTime extends IfcSchedulingTime{

	static public $params = [
		[
			'name' => 'Name',
			'class' => 'Type\IfcLabel',
			'type' => 'object',
			'optional' => true,
		],
		[
			'name' => 'DataOrigin',
			'class' => 'Type\IfcDataOriginEnum',
			'type' => 'object',
			'optional' => true,
		],
		[
			'name' => 'UserDefinedDataOrigin',
			'class' => 'Type\IfcLabel',
			'type' => 'object',
			'optional' => true,
		],
		[
			'name' => 'ScheduleWork',
			'class' => 'Type\IfcDuration',
			'type' => 'object',
			'optional' => true,
		],
		[
			'name' => 'ScheduleUsage',
			'class' => 'Type\IfcPositiveRatioMeasure',
			'type' => 'object',
			'optional' => true,
		],
		[
			'name' => 'ScheduleStart',
			'class' => 'Type\IfcDateTime',
			'type' => 'object',
			'optional' => true,
		],
		[
			'name' => 'ScheduleFinish',
			'class' => 'Type\IfcDateTime',
			'type' => 'object',
			'optional' => true,
		],
		[
			'name' => 'ScheduleContour',
			'class' => 'Type\IfcLabel',
			'type' => 'object',
			'optional' => true,
		],
		[
			'name' => 'LevelingDelay',
			'class' => 'Type\IfcDuration',
			'type' => 'object',
			'optional' => true,
		],
		[
			'name' => 'IsOverAllocated',
			'class' => 'Base\Boolean',
			'type' => 'object',
			'optional' => true,
		],
		[
			'name' => 'StatusTime',
			'class' => 'Type\IfcDateTime',
			'type' => 'object',
			'optional' => true,
		],
		[
			'name' => 'ActualWork',
			'class' => 'Type\IfcDuration',
			'type' => 'object',
			'optional' => true,
		],
		[
			'name' => 'ActualUsage',
			'class' => 'Type\IfcPositiveRatioMeasure',
			'type' => 'object',
			'optional' => true,
		],
		[
			'name' => 'ActualStart',
			'class' => 'Type\IfcDateTime',
			'type' => 'object',
			'optional' => true,
		],
		[
			'name' => 'ActualFinish',
			'class' => 'Type\IfcDateTime',
			'type' => 'object',
			'optional' => true,
		],
		[
			'name' => 'RemainingWork',
			'class' => 'Type\IfcDuration',
			'type' => 'object',
			'optional' => true,
		],
		[
			'name' => 'RemainingUsage',
			'class' => 'Type\IfcPositiveRatioMeasure',
			'type' => 'object',
			'optional' => true,
		],
		[
			'name' => 'Completion',
			'class' => 'Type\IfcPositiveRatioMeasure',
			'type' => 'object',
			'optional' => true,
		],
	];
}
/* DEFINITION
ENTITY IfcResourceTime
SUBTYPE OF (IfcSchedulingTime);
ScheduleWork : OPTIONAL IfcDuration;
ScheduleUsage : OPTIONAL IfcPositiveRatioMeasure;
ScheduleStart : OPTIONAL IfcDateTime;
ScheduleFinish : OPTIONAL IfcDateTime;
ScheduleContour : OPTIONAL IfcLabel;
LevelingDelay : OPTIONAL IfcDuration;
IsOverAllocated : OPTIONAL BOOLEAN;
StatusTime : OPTIONAL IfcDateTime;
ActualWork : OPTIONAL IfcDuration;
ActualUsage : OPTIONAL IfcPositiveRatioMeasure;
ActualStart : OPTIONAL IfcDateTime;
ActualFinish : OPTIONAL IfcDateTime;
RemainingWork : OPTIONAL IfcDuration;
RemainingUsage : OPTIONAL IfcPositiveRatioMeasure;
Completion : OPTIONAL IfcPositiveRatioMeasure;
END_ENTITY;
*/
