<?php

namespace IFCPHP\IFC4\Entity;
use IFCPHP\IFC4 as IFC;

class IfcStructuralPointConnection extends IfcStructuralConnection{

	static public $elementName = 'IFCSTRUCTURALPOINTCONNECTION';

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
			'name' => 'ConditionCoordinateSystem',
			'class' => 'Entity\IfcAxis2Placement3D',
			'type' => 'object',
			'optional' => true,
		],
	];
}
/* DEFINITION
ENTITY IfcStructuralPointConnection
SUBTYPE OF (IfcStructuralConnection);
ConditionCoordinateSystem : OPTIONAL IfcAxis2Placement3D;
END_ENTITY;
*/
