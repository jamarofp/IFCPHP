<?php

namespace IFCPHP\IFC4\Entity;
use IFCPHP\IFC4 as IFC;

class IfcShapeModel extends IfcRepresentation{

	static public $elementName = 'IFCSHAPEMODEL';

	static public $translationFR = 'Modèle de forme';

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
	IfcShapeRepresentation
	IfcTopologyRepresentation
*/


/* DEFINITION
ENTITY IfcShapeModel
ABSTRACT SUPERTYPE OF (ONEOF
(IfcShapeRepresentation
,IfcTopologyRepresentation))
SUBTYPE OF (IfcRepresentation);
INVERSE
OfShapeAspect : SET [0:1] OF IfcShapeAspect FOR ShapeRepresentations;
WHERE
WR11 : (SIZEOF(SELF\IfcRepresentation.OfProductRepresentation) = 1) XOR
(SIZEOF(SELF\IfcRepresentation.RepresentationMap) = 1) XOR
(SIZEOF(OfShapeAspect) = 1);
END_ENTITY;
*/
