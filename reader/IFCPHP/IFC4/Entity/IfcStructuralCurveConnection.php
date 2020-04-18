<?php

namespace IFCPHP\IFC4\Entity;
use IFCPHP\IFC4 as IFC;

class IfcStructuralCurveConnection extends IfcStructuralConnection{

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
			'name' => 'ObjectPlacement',
			'class' => 'Entity\IfcObjectPlacement',
			'type' => 'object',
			'optional' => true,
		],
		[
			'name' => 'Representation',
			'class' => 'Entity\IfcProductRepresentation',
			'type' => 'object',
			'optional' => true,
		],
		[
			'name' => 'AppliedCondition',
			'class' => 'Entity\IfcBoundaryCondition',
			'type' => 'object',
			'optional' => true,
		],
		[
			'name' => 'Axis',
			'class' => 'Entity\IfcDirection',
			'type' => 'object',
			'optional' => false,
		],
	];
}
/* DEFINITION
ENTITY IfcStructuralCurveConnection
SUBTYPE OF (IfcStructuralConnection);
Axis : IfcDirection;
END_ENTITY;
*/