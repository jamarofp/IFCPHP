<?php

namespace IFCPHP\IFC4\Entity;
use IFCPHP\IFC4 as IFC;

class IfcInventory extends IfcGroup{

	static public $elementName = 'IFCINVENTORY';

	static public $translationFR = 'Inventaire';

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
			'name' => 'PredefinedType',
			'class' => 'Type\IfcInventoryTypeEnum',
			'type' => 'object',
			'optional' => true,
		],
		[
			'name' => 'Jurisdiction',
			'class' => 'Type\IfcActorSelect',
			'type' => 'object',
			'optional' => true,
		],
		[
			'name' => 'ResponsiblePersons',
			'class' => 'Entity\IfcPerson',
			'type' => 'array',
			'optional' => true,
			'min' => 1,
		],
		[
			'name' => 'LastUpdateDate',
			'class' => 'Type\IfcDate',
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
			'name' => 'OriginalValue',
			'class' => 'Entity\IfcCostValue',
			'type' => 'object',
			'optional' => true,
		],
	];
}
/* DEFINITION
ENTITY IfcInventory
SUBTYPE OF (IfcGroup);
PredefinedType : OPTIONAL IfcInventoryTypeEnum;
Jurisdiction : OPTIONAL IfcActorSelect;
ResponsiblePersons : OPTIONAL SET [1:?] OF IfcPerson;
LastUpdateDate : OPTIONAL IfcDate;
CurrentValue : OPTIONAL IfcCostValue;
OriginalValue : OPTIONAL IfcCostValue;
END_ENTITY;
*/
