<?php

namespace IFCPHP\IFC4\Entity;
use IFCPHP\IFC4 as IFC;

class IfcMetric extends IfcConstraint{

	static public $translationFR = 'Métrique';

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
			'name' => 'Benchmark',
			'class' => 'Type\IfcBenchmarkEnum',
			'type' => 'object',
			'optional' => false,
		],
		[
			'name' => 'ValueSource',
			'class' => 'Type\IfcLabel',
			'type' => 'object',
			'optional' => true,
		],
		[
			'name' => 'DataValue',
			'class' => 'Type\IfcMetricValueSelect',
			'type' => 'object',
			'optional' => false,
		],
		[
			'name' => 'ReferencePath',
			'class' => 'Entity\IfcReference',
			'type' => 'object',
			'optional' => true,
		],
	];
}
/* DEFINITION
ENTITY IfcMetric
SUBTYPE OF (IfcConstraint);
Benchmark : IfcBenchmarkEnum;
ValueSource : OPTIONAL IfcLabel;
DataValue : IfcMetricValueSelect;
ReferencePath : OPTIONAL IfcReference;
END_ENTITY;
*/
