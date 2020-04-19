<?php

namespace IFCPHP\IFC4\Entity;
use IFCPHP\IFC4 as IFC;

class IfcActor extends IfcObject{

	static public $elementName = 'IFCACTOR';

	static public $translationFR = 'Acteur';

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
			'name' => 'TheActor',
			'class' => 'Type\IfcActorSelect',
			'type' => 'object',
			'optional' => false,
		],
	];
}
/* SUPERTYPE
	IfcOccupant
*/


/* DEFINITION
ENTITY IfcActor
SUPERTYPE OF (ONEOF
(IfcOccupant))
SUBTYPE OF (IfcObject);
TheActor : IfcActorSelect;
INVERSE
IsActingUpon : SET [0:?] OF IfcRelAssignsToActor FOR RelatingActor;
END_ENTITY;
*/
