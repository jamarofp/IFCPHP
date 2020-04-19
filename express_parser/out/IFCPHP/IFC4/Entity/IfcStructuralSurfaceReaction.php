<?php

namespace IFCPHP\IFC4\Entity;
use IFCPHP\IFC4 as IFC;

class IfcStructuralSurfaceReaction extends IfcStructuralReaction{

	static public $elementName = 'IFCSTRUCTURALSURFACEREACTION';

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
			'name' => 'AppliedLoad',
			'class' => 'Entity\IfcStructuralLoad',
			'type' => 'object',
			'optional' => false,
		],
		[
			'name' => 'GlobalOrLocal',
			'class' => 'Type\IfcGlobalOrLocalEnum',
			'type' => 'object',
			'optional' => false,
		],
		[
			'name' => 'PredefinedType',
			'class' => 'Type\IfcStructuralSurfaceActivityTypeEnum',
			'type' => 'object',
			'optional' => false,
		],
	];
}
/* DEFINITION
ENTITY IfcStructuralSurfaceReaction
SUBTYPE OF (IfcStructuralReaction);
PredefinedType : IfcStructuralSurfaceActivityTypeEnum;
WHERE
HasPredefinedType : (PredefinedType <> IfcStructuralSurfaceActivityTypeEnum.USERDEFINED) OR EXISTS(SELF\IfcObject.ObjectType);
END_ENTITY;
*/
