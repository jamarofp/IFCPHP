<?php

namespace IFCPHP\IFC4\Entity;
use IFCPHP\IFC4 as IFC;

class IfcStructuralPlanarAction extends IfcStructuralSurfaceAction{

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
/* DEFINITION
ENTITY IfcStructuralPlanarAction
SUBTYPE OF (IfcStructuralSurfaceAction);
WHERE
SuitableLoadType : SIZEOF(['IFC4.IFCSTRUCTURALLOADPLANARFORCE', 'IFC4.IFCSTRUCTURALLOADTEMPERATURE'] * TYPEOF(SELF\IfcStructuralActivity.AppliedLoad)) = 1;
ConstPredefinedType : SELF\IfcStructuralSurfaceAction.PredefinedType = IfcStructuralSurfaceActivityTypeEnum.CONST;
END_ENTITY;
*/
