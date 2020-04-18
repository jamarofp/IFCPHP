<?php

namespace IFCPHP\IFC4\Entity;
use IFCPHP\IFC4 as IFC;

class IfcWorkCalendar extends IfcControl{

	static public $translationFR = 'Calendrier de travai';

	static public $params = [
		[
			'name' => 'GlobalId',
			'class' => 'Type\IfcGloballyUniqueId',
			'type' => 'object',
			'optional' => false,
		],
		[
			'name' => 'OwnerHistory',
			'class' => 'Entity\IfcOwnerHistory',
			'type' => 'object',
			'optional' => true,
		],
		[
			'name' => 'Name',
			'class' => 'Type\IfcLabel',
			'type' => 'object',
			'optional' => true,
		],
		[
			'name' => 'Description',
			'class' => 'Type\IfcText',
			'type' => 'object',
			'optional' => true,
		],
		[
			'name' => 'ObjectType',
			'class' => 'Type\IfcLabel',
			'type' => 'object',
			'optional' => true,
		],
		[
			'name' => 'Identification',
			'class' => 'Type\IfcIdentifier',
			'type' => 'object',
			'optional' => true,
		],
		[
			'name' => 'WorkingTimes',
			'class' => 'Entity\IfcWorkTime',
			'type' => 'array',
			'optional' => true,
			'min' => 1,
		],
		[
			'name' => 'ExceptionTimes',
			'class' => 'Entity\IfcWorkTime',
			'type' => 'array',
			'optional' => true,
			'min' => 1,
		],
		[
			'name' => 'PredefinedType',
			'class' => 'Type\IfcWorkCalendarTypeEnum',
			'type' => 'object',
			'optional' => true,
		],
	];
}
/* DEFINITION
ENTITY IfcWorkCalendar
SUBTYPE OF (IfcControl);
WorkingTimes : OPTIONAL SET [1:?] OF IfcWorkTime;
ExceptionTimes : OPTIONAL SET [1:?] OF IfcWorkTime;
PredefinedType : OPTIONAL IfcWorkCalendarTypeEnum;
WHERE
CorrectPredefinedType : NOT(EXISTS(PredefinedType)) OR (PredefinedType <> IfcWorkCalendarTypeEnum.USERDEFINED) OR
((PredefinedType = IfcWorkCalendarTypeEnum.USERDEFINED) AND EXISTS(SELF\IfcObject.ObjectType));
END_ENTITY;
*/
