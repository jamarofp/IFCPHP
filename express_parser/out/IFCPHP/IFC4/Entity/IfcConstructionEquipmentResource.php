<?php

namespace IFCPHP\IFC4\Entity;
use IFCPHP\IFC4 as IFC;

class IfcConstructionEquipmentResource extends IfcConstructionResource{

	static public $elementName = 'IFCCONSTRUCTIONEQUIPMENTRESOURCE';

	static public $translationFR = 'Équipement utilisé pour la construction';

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
			'name' => 'LongDescription',
			'class' => 'Type\IfcText',
			'type' => 'object',
			'optional' => true,
		],
		[
			'name' => 'Usage',
			'class' => 'Entity\IfcResourceTime',
			'type' => 'object',
			'optional' => true,
		],
		[
			'name' => 'BaseCosts',
			'class' => 'Entity\IfcAppliedValue',
			'type' => 'array',
			'optional' => true,
			'min' => 1,
		],
		[
			'name' => 'BaseQuantity',
			'class' => 'Entity\IfcPhysicalQuantity',
			'type' => 'object',
			'optional' => true,
		],
		[
			'name' => 'PredefinedType',
			'class' => 'Type\IfcConstructionEquipmentResourceTypeEnum',
			'type' => 'object',
			'optional' => true,
		],
	];
}
/* DEFINITION
ENTITY IfcConstructionEquipmentResource
SUBTYPE OF (IfcConstructionResource);
PredefinedType : OPTIONAL IfcConstructionEquipmentResourceTypeEnum;
WHERE
CorrectPredefinedType : NOT(EXISTS(PredefinedType)) OR
(PredefinedType <> IfcConstructionEquipmentResourceTypeEnum.USERDEFINED) OR
((PredefinedType = IfcConstructionEquipmentResourceTypeEnum.USERDEFINED) AND EXISTS (SELF\IfcObject.ObjectType));
END_ENTITY;
*/
