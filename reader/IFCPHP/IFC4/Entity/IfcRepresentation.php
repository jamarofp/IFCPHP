<?php

namespace IFCPHP\IFC4\Entity;
use IFCPHP\IFC4 as IFC;

class IfcRepresentation extends IFC\Common{

	static public $translationFR = 'Représentation ';

	static public $params = [
		[
			'name' => 'ContextOfItems',
			'class' => 'Entity\IfcRepresentationContext',
			'type' => 'object',
			'optional' => false,
		],
		[
			'name' => 'RepresentationIdentifier',
			'class' => 'Type\IfcLabel',
			'type' => 'object',
			'optional' => true,
		],
		[
			'name' => 'RepresentationType',
			'class' => 'Type\IfcLabel',
			'type' => 'object',
			'optional' => true,
		],
		[
			'name' => 'Items',
			'class' => 'Entity\IfcRepresentationItem',
			'type' => 'array',
			'optional' => false,
			'min' => 1,
		],
	];
}
/* SUPERTYPE
	IfcShapeModel
	IfcStyleModel
*/


/* DEFINITION
ENTITY IfcRepresentation
ABSTRACT SUPERTYPE OF (ONEOF
(IfcShapeModel
,IfcStyleModel));
ContextOfItems : IfcRepresentationContext;
RepresentationIdentifier : OPTIONAL IfcLabel;
RepresentationType : OPTIONAL IfcLabel;
Items : SET [1:?] OF IfcRepresentationItem;
INVERSE
RepresentationMap : SET [0:1] OF IfcRepresentationMap FOR MappedRepresentation;
LayerAssignments : SET [0:?] OF IfcPresentationLayerAssignment FOR AssignedItems;
OfProductRepresentation : SET [0:?] OF IfcProductRepresentation FOR Representations;
END_ENTITY;
*/
