<?php

namespace IFCPHP\IFC4\Entity;
use IFCPHP\IFC4 as IFC;

class IfcStructuralPointAction extends IfcStructuralAction{

	static public $elementName = 'IFCSTRUCTURALPOINTACTION';

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
	];
}
/* DEFINITION
ENTITY IfcStructuralPointAction
SUBTYPE OF (IfcStructuralAction);
WHERE
SuitableLoadType : SIZEOF(['IFC4.IFCSTRUCTURALLOADSINGLEFORCE', 'IFC4.IFCSTRUCTURALLOADSINGLEDISPLACEMENT'] * TYPEOF(SELF\IfcStructuralActivity.AppliedLoad)) = 1;
END_ENTITY;
*/
