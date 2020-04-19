<?php

namespace IFCPHP\IFC4\Entity;
use IFCPHP\IFC4 as IFC;

class IfcStructuralActivity extends IfcProduct{

	static public $elementName = 'IFCSTRUCTURALACTIVITY';

	static public $translationFR = 'Activité structurelle';

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
	];
}
/* SUPERTYPE
	IfcStructuralAction
	IfcStructuralReaction
*/


/* DEFINITION
ENTITY IfcStructuralActivity
ABSTRACT SUPERTYPE OF (ONEOF
(IfcStructuralAction
,IfcStructuralReaction))
SUBTYPE OF (IfcProduct);
AppliedLoad : IfcStructuralLoad;
GlobalOrLocal : IfcGlobalOrLocalEnum;
INVERSE
AssignedToStructuralItem : SET [0:1] OF IfcRelConnectsStructuralActivity FOR RelatedStructuralActivity;
END_ENTITY;
*/
