<?php

namespace IFCPHP\IFC4\Entity;
use IFCPHP\IFC4 as IFC;

class IfcWorkTime extends IfcSchedulingTime{

	static public $translationFR = 'Période de travai';

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
			'name' => 'RecurrencePattern',
			'class' => 'Entity\IfcRecurrencePattern',
			'type' => 'object',
			'optional' => true,
		],
		[
			'name' => 'Start',
			'class' => 'Type\IfcDate',
			'type' => 'object',
			'optional' => true,
		],
		[
			'name' => 'Finish',
			'class' => 'Type\IfcDate',
			'type' => 'object',
			'optional' => true,
		],
	];
}
/* DEFINITION
ENTITY IfcWorkTime
SUBTYPE OF (IfcSchedulingTime);
RecurrencePattern : OPTIONAL IfcRecurrencePattern;
Start : OPTIONAL IfcDate;
Finish : OPTIONAL IfcDate;
END_ENTITY;
*/
