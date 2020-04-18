<?php

namespace IFCPHP\IFC4\Entity;
use IFCPHP\IFC4 as IFC;

class IfcGroup extends IfcObject{

	static public $translationFR = 'Groupe';

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
	];
}
/* SUPERTYPE
	IfcAsset
	IfcInventory
	IfcStructuralLoadGroup
	IfcStructuralResultGroup
	IfcSystem
*/


/* DEFINITION
ENTITY IfcGroup
SUPERTYPE OF (ONEOF
(IfcAsset
,IfcInventory
,IfcStructuralLoadGroup
,IfcStructuralResultGroup
,IfcSystem))
SUBTYPE OF (IfcObject);
INVERSE
IsGroupedBy : SET [0:?] OF IfcRelAssignsToGroup FOR RelatingGroup;
END_ENTITY;
*/
