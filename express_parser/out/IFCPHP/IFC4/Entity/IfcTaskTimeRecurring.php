<?php

namespace IFCPHP\IFC4\Entity;
use IFCPHP\IFC4 as IFC;

class IfcTaskTimeRecurring extends IfcTaskTime{

	static public $elementName = 'IFCTASKTIMERECURRING';

	static public $translationFR = 'Propriétés temporelles de tâche périodique';

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
			'name' => 'DurationType',
			'class' => 'Type\IfcTaskDurationEnum',
			'type' => 'object',
			'optional' => true,
		],
		[
			'name' => 'ScheduleDuration',
			'class' => 'Type\IfcDuration',
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
			'name' => 'EarlyStart',
			'class' => 'Type\IfcDateTime',
			'type' => 'object',
			'optional' => true,
		],
		[
			'name' => 'EarlyFinish',
			'class' => 'Type\IfcDateTime',
			'type' => 'object',
			'optional' => true,
		],
		[
			'name' => 'LateStart',
			'class' => 'Type\IfcDateTime',
			'type' => 'object',
			'optional' => true,
		],
		[
			'name' => 'LateFinish',
			'class' => 'Type\IfcDateTime',
			'type' => 'object',
			'optional' => true,
		],
		[
			'name' => 'FreeFloat',
			'class' => 'Type\IfcDuration',
			'type' => 'object',
			'optional' => true,
		],
		[
			'name' => 'TotalFloat',
			'class' => 'Type\IfcDuration',
			'type' => 'object',
			'optional' => true,
		],
		[
			'name' => 'IsCritical',
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
			'name' => 'ActualDuration',
			'class' => 'Type\IfcDuration',
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
			'name' => 'RemainingTime',
			'class' => 'Type\IfcDuration',
			'type' => 'object',
			'optional' => true,
		],
		[
			'name' => 'Completion',
			'class' => 'Type\IfcPositiveRatioMeasure',
			'type' => 'object',
			'optional' => true,
		],
		[
			'name' => 'Recurrance',
			'class' => 'Entity\IfcRecurrencePattern',
			'type' => 'object',
			'optional' => false,
		],
	];
}
/* DEFINITION
ENTITY IfcTaskTimeRecurring
SUBTYPE OF (IfcTaskTime);
Recurrance : IfcRecurrencePattern;
END_ENTITY;
*/
