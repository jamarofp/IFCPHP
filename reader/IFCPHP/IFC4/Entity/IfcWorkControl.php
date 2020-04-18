<?php

namespace IFCPHP\IFC4\Entity;
use IFCPHP\IFC4 as IFC;

class IfcWorkControl extends IfcControl{

	static public $translationFR = 'Contrôle des travaux';

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
			'name' => 'CreationDate',
			'class' => 'Type\IfcDateTime',
			'type' => 'object',
			'optional' => false,
		],
		[
			'name' => 'Creators',
			'class' => 'Entity\IfcPerson',
			'type' => 'array',
			'optional' => true,
			'min' => 1,
		],
		[
			'name' => 'Purpose',
			'class' => 'Type\IfcLabel',
			'type' => 'object',
			'optional' => true,
		],
		[
			'name' => 'Duration',
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
			'name' => 'StartTime',
			'class' => 'Type\IfcDateTime',
			'type' => 'object',
			'optional' => false,
		],
		[
			'name' => 'FinishTime',
			'class' => 'Type\IfcDateTime',
			'type' => 'object',
			'optional' => true,
		],
	];
}
/* SUPERTYPE
	IfcWorkPlan
	IfcWorkSchedule
*/


/* DEFINITION
ENTITY IfcWorkControl
ABSTRACT SUPERTYPE OF (ONEOF
(IfcWorkPlan
,IfcWorkSchedule))
SUBTYPE OF (IfcControl);
CreationDate : IfcDateTime;
Creators : OPTIONAL SET [1:?] OF IfcPerson;
Purpose : OPTIONAL IfcLabel;
Duration : OPTIONAL IfcDuration;
TotalFloat : OPTIONAL IfcDuration;
StartTime : IfcDateTime;
FinishTime : OPTIONAL IfcDateTime;
END_ENTITY;
*/
