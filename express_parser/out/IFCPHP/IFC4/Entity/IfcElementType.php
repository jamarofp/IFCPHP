<?php

namespace IFCPHP\IFC4\Entity;
use IFCPHP\IFC4 as IFC;

class IfcElementType extends IfcTypeProduct{

	static public $elementName = 'IFCELEMENTTYPE';

	static public $translationFR = 'Type d\'élément ';

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
			'name' => 'RepresentationMaps',
			'class' => 'Entity\IfcRepresentationMap',
			'type' => 'array',
			'optional' => true,
			'min' => 1,
		],
		[
			'name' => 'Tag',
			'class' => 'Type\IfcLabel',
			'type' => 'object',
			'optional' => true,
		],
		[
			'name' => 'ElementType',
			'class' => 'Type\IfcLabel',
			'type' => 'object',
			'optional' => true,
		],
	];
}
/* SUPERTYPE
	IfcBuildingElementType
	IfcCivilElementType
	IfcDistributionElementType
	IfcElementAssemblyType
	IfcElementComponentType
	IfcFurnishingElementType
	IfcGeographicElementType
	IfcTransportElementType
*/


/* DEFINITION
ENTITY IfcElementType
ABSTRACT SUPERTYPE OF (ONEOF
(IfcBuildingElementType
,IfcCivilElementType
,IfcDistributionElementType
,IfcElementAssemblyType
,IfcElementComponentType
,IfcFurnishingElementType
,IfcGeographicElementType
,IfcTransportElementType))
SUBTYPE OF (IfcTypeProduct);
ElementType : OPTIONAL IfcLabel;
END_ENTITY;
*/
