<?php

namespace IFCPHP\IFC4\Entity;
use IFCPHP\IFC4 as IFC;

class IfcBoundaryNodeCondition extends IfcBoundaryCondition{

	static public $translationFR = 'Condition de nœud limite';

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
	];
}
/* SUPERTYPE
	IfcBoundaryNodeConditionWarping
*/


/* DEFINITION
ENTITY IfcBoundaryNodeCondition
SUPERTYPE OF (ONEOF
(IfcBoundaryNodeConditionWarping))
SUBTYPE OF (IfcBoundaryCondition);
TranslationalStiffnessX : OPTIONAL IfcTranslationalStiffnessSelect;
TranslationalStiffnessY : OPTIONAL IfcTranslationalStiffnessSelect;
TranslationalStiffnessZ : OPTIONAL IfcTranslationalStiffnessSelect;
RotationalStiffnessX : OPTIONAL IfcRotationalStiffnessSelect;
RotationalStiffnessY : OPTIONAL IfcRotationalStiffnessSelect;
RotationalStiffnessZ : OPTIONAL IfcRotationalStiffnessSelect;
END_ENTITY;
*/
