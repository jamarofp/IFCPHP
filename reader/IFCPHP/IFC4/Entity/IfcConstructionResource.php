<?php

namespace IFCPHP\IFC4\Entity;
use IFCPHP\IFC4 as IFC;

class IfcConstructionResource extends IfcResource{

	static public $translationFR = 'Ressource de construction';

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
	];
}
/* SUPERTYPE
	IfcConstructionEquipmentResource
	IfcConstructionMaterialResource
	IfcConstructionProductResource
	IfcCrewResource
	IfcLaborResource
	IfcSubContractResource
*/


/* DEFINITION
ENTITY IfcConstructionResource
ABSTRACT SUPERTYPE OF (ONEOF
(IfcConstructionEquipmentResource
,IfcConstructionMaterialResource
,IfcConstructionProductResource
,IfcCrewResource
,IfcLaborResource
,IfcSubContractResource))
SUBTYPE OF (IfcResource);
Usage : OPTIONAL IfcResourceTime;
BaseCosts : OPTIONAL LIST [1:?] OF IfcAppliedValue;
BaseQuantity : OPTIONAL IfcPhysicalQuantity;
END_ENTITY;
*/
