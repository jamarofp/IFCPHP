<?php

namespace IFCPHP\IFC4\Entity;
use IFCPHP\IFC4 as IFC;

class IfcBoundaryNodeConditionWarping extends IfcBoundaryNodeCondition{

	static public $params = [
		[
			'name' => 'Name',
			'class' => 'Type\IfcLabel',
			'type' => 'object',
			'optional' => true,
		],
		[
			'name' => 'TranslationalStiffnessX',
			'class' => 'Type\IfcTranslationalStiffnessSelect',
			'type' => 'object',
			'optional' => true,
		],
		[
			'name' => 'TranslationalStiffnessY',
			'class' => 'Type\IfcTranslationalStiffnessSelect',
			'type' => 'object',
			'optional' => true,
		],
		[
			'name' => 'TranslationalStiffnessZ',
			'class' => 'Type\IfcTranslationalStiffnessSelect',
			'type' => 'object',
			'optional' => true,
		],
		[
			'name' => 'RotationalStiffnessX',
			'class' => 'Type\IfcRotationalStiffnessSelect',
			'type' => 'object',
			'optional' => true,
		],
		[
			'name' => 'RotationalStiffnessY',
			'class' => 'Type\IfcRotationalStiffnessSelect',
			'type' => 'object',
			'optional' => true,
		],
		[
			'name' => 'RotationalStiffnessZ',
			'class' => 'Type\IfcRotationalStiffnessSelect',
			'type' => 'object',
			'optional' => true,
		],
		[
			'name' => 'WarpingStiffness',
			'class' => 'Type\IfcWarpingStiffnessSelect',
			'type' => 'object',
			'optional' => true,
		],
	];
}
/* DEFINITION
ENTITY IfcBoundaryNodeConditionWarping
SUBTYPE OF (IfcBoundaryNodeCondition);
WarpingStiffness : OPTIONAL IfcWarpingStiffnessSelect;
END_ENTITY;
*/
