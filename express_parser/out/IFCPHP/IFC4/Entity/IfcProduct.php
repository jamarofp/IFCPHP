<?php

namespace IFCPHP\IFC4\Entity;
use IFCPHP\IFC4 as IFC;

class IfcProduct extends IfcObject{

	static public $elementName = 'IFCPRODUCT';

	static public $translationFR = 'Produit';

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
			'name' => 'ObjectPlacement',
			'class' => 'Entity\IfcObjectPlacement',
			'type' => 'object',
			'optional' => true,
		],
		[
			'name' => 'Representation',
			'class' => 'Entity\IfcProductRepresentation',
			'type' => 'object',
			'optional' => true,
		],
	];
}
/* SUPERTYPE
	IfcAnnotation
	IfcElement
	IfcGrid
	IfcPort
	IfcProxy
	IfcSpatialElement
	IfcStructuralActivity
	IfcStructuralItem
*/


/* DEFINITION
ENTITY IfcProduct
ABSTRACT SUPERTYPE OF (ONEOF
(IfcAnnotation
,IfcElement
,IfcGrid
,IfcPort
,IfcProxy
,IfcSpatialElement
,IfcStructuralActivity
,IfcStructuralItem))
SUBTYPE OF (IfcObject);
ObjectPlacement : OPTIONAL IfcObjectPlacement;
Representation : OPTIONAL IfcProductRepresentation;
INVERSE
ReferencedBy : SET [0:?] OF IfcRelAssignsToProduct FOR RelatingProduct;
WHERE
PlacementForShapeRepresentation : (EXISTS(Representation) AND EXISTS(ObjectPlacement))
OR (EXISTS(Representation) AND
(SIZEOF(QUERY(temp <* Representation.Representations | 'IFC4.IFCSHAPEREPRESENTATION' IN TYPEOF(temp))) = 0))
OR (NOT(EXISTS(Representation)));
END_ENTITY;
*/
