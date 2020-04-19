<?php

namespace IFCPHP\IFC4\Entity;
use IFCPHP\IFC4 as IFC;

class IfcCostSchedule extends IfcControl{

	static public $elementName = 'IFCCOSTSCHEDULE';

	static public $translationFR = 'IfcCostSchedule';

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
			'name' => 'PredefinedType',
			'class' => 'Type\IfcCostScheduleTypeEnum',
			'type' => 'object',
			'optional' => true,
		],
		[
			'name' => 'Status',
			'class' => 'Type\IfcLabel',
			'type' => 'object',
			'optional' => true,
		],
		[
			'name' => 'SubmittedOn',
			'class' => 'Type\IfcDateTime',
			'type' => 'object',
			'optional' => true,
		],
		[
			'name' => 'UpdateDate',
			'class' => 'Type\IfcDateTime',
			'type' => 'object',
			'optional' => true,
		],
	];
}
/* DEFINITION
ENTITY IfcCostSchedule
SUBTYPE OF (IfcControl);
PredefinedType : OPTIONAL IfcCostScheduleTypeEnum;
Status : OPTIONAL IfcLabel;
SubmittedOn : OPTIONAL IfcDateTime;
UpdateDate : OPTIONAL IfcDateTime;
END_ENTITY;
*/
