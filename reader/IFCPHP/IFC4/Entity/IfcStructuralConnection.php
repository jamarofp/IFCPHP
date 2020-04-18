<?php

namespace IFCPHP\IFC4\Entity;
use IFCPHP\IFC4 as IFC;

class IfcStructuralConnection extends IfcStructuralItem{

	static public $translationFR = 'Liaison structurelle';

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
	];
}
/* SUPERTYPE
	IfcStructuralCurveConnection
	IfcStructuralPointConnection
	IfcStructuralSurfaceConnection
*/


/* DEFINITION
ENTITY IfcStructuralConnection
ABSTRACT SUPERTYPE OF (ONEOF
(IfcStructuralCurveConnection
,IfcStructuralPointConnection
,IfcStructuralSurfaceConnection))
SUBTYPE OF (IfcStructuralItem);
AppliedCondition : OPTIONAL IfcBoundaryCondition;
INVERSE
ConnectsStructuralMembers : SET [1:?] OF IfcRelConnectsStructuralMember FOR RelatedStructuralConnection;
END_ENTITY;
*/
