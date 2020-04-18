<?php

namespace IFCPHP\IFC4\Entity;
use IFCPHP\IFC4 as IFC;

class IfcConstructionResourceType extends IfcTypeResource{

	static public $translationFR = 'Type de ressource de construction';

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
			'name' => 'ApplicableOccurrence',
			'class' => 'Type\IfcIdentifier',
			'type' => 'object',
			'optional' => true,
		],
		[
			'name' => 'HasPropertySets',
			'class' => 'Entity\IfcPropertySetDefinition',
			'type' => 'array',
			'optional' => true,
			'min' => 1,
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
			'name' => 'ResourceType',
			'class' => 'Type\IfcLabel',
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
	];
}
/* SUPERTYPE
	IfcConstructionEquipmentResourceType
	IfcConstructionMaterialResourceType
	IfcConstructionProductResourceType
	IfcCrewResourceType
	IfcLaborResourceType
	IfcSubContractResourceType
*/


/* DEFINITION
ENTITY IfcConstructionResourceType
ABSTRACT SUPERTYPE OF (ONEOF
(IfcConstructionEquipmentResourceType
,IfcConstructionMaterialResourceType
,IfcConstructionProductResourceType
,IfcCrewResourceType
,IfcLaborResourceType
,IfcSubContractResourceType))
SUBTYPE OF (IfcTypeResource);
BaseCosts : OPTIONAL LIST [1:?] OF IfcAppliedValue;
BaseQuantity : OPTIONAL IfcPhysicalQuantity;
END_ENTITY;
*/
