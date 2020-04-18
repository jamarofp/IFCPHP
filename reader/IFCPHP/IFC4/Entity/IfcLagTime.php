<?php

namespace IFCPHP\IFC4\Entity;
use IFCPHP\IFC4 as IFC;

class IfcLagTime extends IfcSchedulingTime{

	static public $translationFR = 'Décalage entre processus';

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
			'name' => 'LagValue',
			'class' => 'Type\IfcTimeOrRatioSelect',
			'type' => 'object',
			'optional' => false,
		],
		[
			'name' => 'DurationType',
			'class' => 'Type\IfcTaskDurationEnum',
			'type' => 'object',
			'optional' => false,
		],
	];
}
/* DEFINITION
ENTITY IfcLagTime
SUBTYPE OF (IfcSchedulingTime);
LagValue : IfcTimeOrRatioSelect;
DurationType : IfcTaskDurationEnum;
END_ENTITY;
*/
