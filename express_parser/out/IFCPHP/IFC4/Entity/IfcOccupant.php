<?php

namespace IFCPHP\IFC4\Entity;
use IFCPHP\IFC4 as IFC;

class IfcOccupant extends IfcActor{

	static public $elementName = 'IFCOCCUPANT';

	static public $translationFR = 'Occupant';

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
		[
			'name' => 'PredefinedType',
			'class' => 'Type\IfcOccupantTypeEnum',
			'type' => 'object',
			'optional' => true,
		],
	];
}
/* DEFINITION
ENTITY IfcOccupant
SUBTYPE OF (IfcActor);
PredefinedType : OPTIONAL IfcOccupantTypeEnum;
WHERE
WR31 : NOT(PredefinedType = IfcOccupantTypeEnum.USERDEFINED)
OR EXISTS(SELF\IfcObject.ObjectType);
END_ENTITY;
*/
