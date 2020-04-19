<?php

namespace IFCPHP\IFC4\Entity;
use IFCPHP\IFC4 as IFC;

class IfcTypeProduct extends IfcTypeObject{

	static public $elementName = 'IFCTYPEPRODUCT';

	static public $translationFR = 'Définition d\'un type de produit';

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
	];
}
/* SUPERTYPE
	IfcDoorStyle
	IfcElementType
	IfcSpatialElementType
	IfcWindowStyle
*/


/* DEFINITION
ENTITY IfcTypeProduct
SUPERTYPE OF (ONEOF
(IfcDoorStyle
,IfcElementType
,IfcSpatialElementType
,IfcWindowStyle))
SUBTYPE OF (IfcTypeObject);
RepresentationMaps : OPTIONAL LIST [1:?] OF UNIQUE IfcRepresentationMap;
Tag : OPTIONAL IfcLabel;
INVERSE
ReferencedBy : SET [0:?] OF IfcRelAssignsToProduct FOR RelatingProduct;
WHERE
ApplicableOccurrence : NOT(EXISTS(SELF\IfcTypeObject.Types[1])) OR
(SIZEOF(QUERY(temp <* SELF\IfcTypeObject.Types[1].RelatedObjects |
NOT('IFC4.IFCPRODUCT' IN TYPEOF(temp)))
) = 0);
END_ENTITY;
*/
