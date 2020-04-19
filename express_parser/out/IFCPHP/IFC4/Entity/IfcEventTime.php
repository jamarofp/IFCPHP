<?php

namespace IFCPHP\IFC4\Entity;
use IFCPHP\IFC4 as IFC;

class IfcEventTime extends IfcSchedulingTime{

	static public $elementName = 'IFCEVENTTIME';

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
			'name' => 'ActualDate',
			'class' => 'Type\IfcDateTime',
			'type' => 'object',
			'optional' => true,
		],
		[
			'name' => 'EarlyDate',
			'class' => 'Type\IfcDateTime',
			'type' => 'object',
			'optional' => true,
		],
		[
			'name' => 'LateDate',
			'class' => 'Type\IfcDateTime',
			'type' => 'object',
			'optional' => true,
		],
		[
			'name' => 'ScheduleDate',
			'class' => 'Type\IfcDateTime',
			'type' => 'object',
			'optional' => true,
		],
	];
}
/* DEFINITION
ENTITY IfcEventTime
SUBTYPE OF (IfcSchedulingTime);
ActualDate : OPTIONAL IfcDateTime;
EarlyDate : OPTIONAL IfcDateTime;
LateDate : OPTIONAL IfcDateTime;
ScheduleDate : OPTIONAL IfcDateTime;
END_ENTITY;
*/
