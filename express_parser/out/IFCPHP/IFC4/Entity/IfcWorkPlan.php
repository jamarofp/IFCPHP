<?php

namespace IFCPHP\IFC4\Entity;
use IFCPHP\IFC4 as IFC;

class IfcWorkPlan extends IfcWorkControl{

	static public $elementName = 'IFCWORKPLAN';

	static public $translationFR = 'Planning de travai';

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
		[
			'name' => 'PredefinedType',
			'class' => 'Type\IfcWorkPlanTypeEnum',
			'type' => 'object',
			'optional' => true,
		],
	];
}
/* DEFINITION
ENTITY IfcWorkPlan
SUBTYPE OF (IfcWorkControl);
PredefinedType : OPTIONAL IfcWorkPlanTypeEnum;
WHERE
CorrectPredefinedType : NOT(EXISTS(PredefinedType)) OR (PredefinedType <> IfcWorkPlanTypeEnum.USERDEFINED) OR
((PredefinedType = IfcWorkPlanTypeEnum.USERDEFINED) AND EXISTS(SELF\IfcObject.ObjectType));
END_ENTITY;
*/
