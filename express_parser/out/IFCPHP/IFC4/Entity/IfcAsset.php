<?php

namespace IFCPHP\IFC4\Entity;
use IFCPHP\IFC4 as IFC;

class IfcAsset extends IfcGroup{

	static public $elementName = 'IFCASSET';

	static public $translationFR = 'Biens';

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
			'name' => 'Identification',
			'class' => 'Type\IfcIdentifier',
			'type' => 'object',
			'optional' => true,
		],
		[
			'name' => 'OriginalValue',
			'class' => 'Entity\IfcCostValue',
			'type' => 'object',
			'optional' => true,
		],
		[
			'name' => 'CurrentValue',
			'class' => 'Entity\IfcCostValue',
			'type' => 'object',
			'optional' => true,
		],
		[
			'name' => 'TotalReplacementCost',
			'class' => 'Entity\IfcCostValue',
			'type' => 'object',
			'optional' => true,
		],
		[
			'name' => 'Owner',
			'class' => 'Type\IfcActorSelect',
			'type' => 'object',
			'optional' => true,
		],
		[
			'name' => 'User',
			'class' => 'Type\IfcActorSelect',
			'type' => 'object',
			'optional' => true,
		],
		[
			'name' => 'ResponsiblePerson',
			'class' => 'Entity\IfcPerson',
			'type' => 'object',
			'optional' => true,
		],
		[
			'name' => 'IncorporationDate',
			'class' => 'Type\IfcDate',
			'type' => 'object',
			'optional' => true,
		],
		[
			'name' => 'DepreciatedValue',
			'class' => 'Entity\IfcCostValue',
			'type' => 'object',
			'optional' => true,
		],
	];
}
/* DEFINITION
ENTITY IfcAsset
SUBTYPE OF (IfcGroup);
Identification : OPTIONAL IfcIdentifier;
OriginalValue : OPTIONAL IfcCostValue;
CurrentValue : OPTIONAL IfcCostValue;
TotalReplacementCost : OPTIONAL IfcCostValue;
Owner : OPTIONAL IfcActorSelect;
User : OPTIONAL IfcActorSelect;
ResponsiblePerson : OPTIONAL IfcPerson;
IncorporationDate : OPTIONAL IfcDate;
DepreciatedValue : OPTIONAL IfcCostValue;
END_ENTITY;
*/
