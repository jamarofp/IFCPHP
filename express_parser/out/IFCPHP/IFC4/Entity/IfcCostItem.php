<?php

namespace IFCPHP\IFC4\Entity;
use IFCPHP\IFC4 as IFC;

class IfcCostItem extends IfcControl{

	static public $elementName = 'IFCCOSTITEM';

	static public $translationFR = 'Item de coût';

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
			'name' => 'PredefinedType',
			'class' => 'Type\IfcCostItemTypeEnum',
			'type' => 'object',
			'optional' => true,
		],
		[
			'name' => 'CostValues',
			'class' => 'Entity\IfcCostValue',
			'type' => 'array',
			'optional' => true,
			'min' => 1,
		],
		[
			'name' => 'CostQuantities',
			'class' => 'Entity\IfcPhysicalQuantity',
			'type' => 'array',
			'optional' => true,
			'min' => 1,
		],
	];
}
/* DEFINITION
ENTITY IfcCostItem
SUBTYPE OF (IfcControl);
PredefinedType : OPTIONAL IfcCostItemTypeEnum;
CostValues : OPTIONAL LIST [1:?] OF IfcCostValue;
CostQuantities : OPTIONAL LIST [1:?] OF IfcPhysicalQuantity;
END_ENTITY;
*/
