<?php

namespace IFCPHP\IFC4\Entity;
use IFCPHP\IFC4 as IFC;

class IfcRelConnectsWithEccentricity extends IfcRelConnectsStructuralMember{

	static public $elementName = 'IFCRELCONNECTSWITHECCENTRICITY';

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
		[
			'name' => 'ConnectionConstraint',
			'class' => 'Entity\IfcConnectionGeometry',
			'type' => 'object',
			'optional' => false,
		],
	];
}
/* DEFINITION
ENTITY IfcRelConnectsWithEccentricity
SUBTYPE OF (IfcRelConnectsStructuralMember);
ConnectionConstraint : IfcConnectionGeometry;
END_ENTITY;
*/
