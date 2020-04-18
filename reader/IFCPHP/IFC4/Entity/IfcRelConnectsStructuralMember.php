<?php

namespace IFCPHP\IFC4\Entity;
use IFCPHP\IFC4 as IFC;

class IfcRelConnectsStructuralMember extends IfcRelConnects{

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
			'name' => 'RelatingStructuralMember',
			'class' => 'Entity\IfcStructuralMember',
			'type' => 'object',
			'optional' => false,
		],
		[
			'name' => 'RelatedStructuralConnection',
			'class' => 'Entity\IfcStructuralConnection',
			'type' => 'object',
			'optional' => false,
		],
		[
			'name' => 'AppliedCondition',
			'class' => 'Entity\IfcBoundaryCondition',
			'type' => 'object',
			'optional' => true,
		],
		[
			'name' => 'AdditionalConditions',
			'class' => 'Entity\IfcStructuralConnectionCondition',
			'type' => 'object',
			'optional' => true,
		],
		[
			'name' => 'SupportedLength',
			'class' => 'Type\IfcLengthMeasure',
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
/* SUPERTYPE
	IfcRelConnectsWithEccentricity
*/


/* DEFINITION
ENTITY IfcRelConnectsStructuralMember
SUPERTYPE OF (ONEOF
(IfcRelConnectsWithEccentricity))
SUBTYPE OF (IfcRelConnects);
RelatingStructuralMember : IfcStructuralMember;
RelatedStructuralConnection : IfcStructuralConnection;
AppliedCondition : OPTIONAL IfcBoundaryCondition;
AdditionalConditions : OPTIONAL IfcStructuralConnectionCondition;
SupportedLength : OPTIONAL IfcLengthMeasure;
ConditionCoordinateSystem : OPTIONAL IfcAxis2Placement3D;
END_ENTITY;
*/
