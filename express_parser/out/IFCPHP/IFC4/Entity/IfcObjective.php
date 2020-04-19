<?php

namespace IFCPHP\IFC4\Entity;
use IFCPHP\IFC4 as IFC;

class IfcObjective extends IfcConstraint{

	static public $elementName = 'IFCOBJECTIVE';

	static public $translationFR = 'Objectif';

	static public $params = [
		[
			'name' => 'Name',
			'class' => 'Type\IfcLabel',
			'type' => 'object',
			'optional' => false,
		],
		[
			'name' => 'Description',
			'class' => 'Type\IfcText',
			'type' => 'object',
			'optional' => true,
		],
		[
			'name' => 'ConstraintGrade',
			'class' => 'Type\IfcConstraintEnum',
			'type' => 'object',
			'optional' => false,
		],
		[
			'name' => 'ConstraintSource',
			'class' => 'Type\IfcLabel',
			'type' => 'object',
			'optional' => true,
		],
		[
			'name' => 'CreatingActor',
			'class' => 'Type\IfcActorSelect',
			'type' => 'object',
			'optional' => true,
		],
		[
			'name' => 'CreationTime',
			'class' => 'Type\IfcDateTime',
			'type' => 'object',
			'optional' => true,
		],
		[
			'name' => 'UserDefinedGrade',
			'class' => 'Type\IfcLabel',
			'type' => 'object',
			'optional' => true,
		],
		[
			'name' => 'BenchmarkValues',
			'class' => 'Entity\IfcConstraint',
			'type' => 'array',
			'optional' => true,
			'min' => 1,
		],
		[
			'name' => 'LogicalAggregator',
			'class' => 'Type\IfcLogicalOperatorEnum',
			'type' => 'object',
			'optional' => true,
		],
		[
			'name' => 'ObjectiveQualifier',
			'class' => 'Type\IfcObjectiveEnum',
			'type' => 'object',
			'optional' => false,
		],
		[
			'name' => 'UserDefinedQualifier',
			'class' => 'Type\IfcLabel',
			'type' => 'object',
			'optional' => true,
		],
	];
}
/* DEFINITION
ENTITY IfcObjective
SUBTYPE OF (IfcConstraint);
BenchmarkValues : OPTIONAL LIST [1:?] OF IfcConstraint;
LogicalAggregator : OPTIONAL IfcLogicalOperatorEnum;
ObjectiveQualifier : IfcObjectiveEnum;
UserDefinedQualifier : OPTIONAL IfcLabel;
WHERE
WR21 : (ObjectiveQualifier <> IfcObjectiveEnum.USERDEFINED) OR
((ObjectiveQualifier = IfcObjectiveEnum.USERDEFINED) AND EXISTS(SELF\IfcObjective.UserDefinedQualifier));
END_ENTITY;
*/
