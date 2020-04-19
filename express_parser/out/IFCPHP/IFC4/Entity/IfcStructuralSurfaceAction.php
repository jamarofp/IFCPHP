<?php

namespace IFCPHP\IFC4\Entity;
use IFCPHP\IFC4 as IFC;

class IfcStructuralSurfaceAction extends IfcStructuralAction{

	static public $elementName = 'IFCSTRUCTURALSURFACEACTION';

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
			'name' => 'DestabilizingLoad',
			'class' => 'Base\Boolean',
			'type' => 'object',
			'optional' => true,
		],
		[
			'name' => 'ProjectedOrTrue',
			'class' => 'Type\IfcProjectedOrTrueLengthEnum',
			'type' => 'object',
			'optional' => true,
		],
		[
			'name' => 'PredefinedType',
			'class' => 'Type\IfcStructuralSurfaceActivityTypeEnum',
			'type' => 'object',
			'optional' => false,
		],
	];
}
/* SUPERTYPE
	IfcStructuralPlanarAction
*/


/* DEFINITION
ENTITY IfcStructuralSurfaceAction
SUPERTYPE OF (ONEOF
(IfcStructuralPlanarAction))
SUBTYPE OF (IfcStructuralAction);
ProjectedOrTrue : OPTIONAL IfcProjectedOrTrueLengthEnum;
PredefinedType : IfcStructuralSurfaceActivityTypeEnum;
WHERE
ProjectedIsGlobal : (NOT EXISTS(ProjectedOrTrue)) OR
((ProjectedOrTrue <> PROJECTED_LENGTH) OR
(SELF\IfcStructuralActivity.GlobalOrLocal = GLOBAL_COORDS));
HasObjectType : (PredefinedType <> IfcStructuralSurfaceActivityTypeEnum.USERDEFINED) OR EXISTS(SELF\IfcObject.ObjectType);
END_ENTITY;
*/
