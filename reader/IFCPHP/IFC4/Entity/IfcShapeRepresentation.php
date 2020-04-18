<?php

namespace IFCPHP\IFC4\Entity;
use IFCPHP\IFC4 as IFC;

class IfcShapeRepresentation extends IfcShapeModel{

	static public $translationFR = 'Représentation de forme';

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
/* DEFINITION
ENTITY IfcShapeRepresentation
SUBTYPE OF (IfcShapeModel);
WHERE
WR21 : 'IFC4.IFCGEOMETRICREPRESENTATIONCONTEXT'
IN TYPEOF(SELF\IfcRepresentation.ContextOfItems);
WR22 : SIZEOF(QUERY(temp <* Items |
('IFC4.IFCTOPOLOGICALREPRESENTATIONITEM' IN TYPEOF(temp))
AND (NOT(SIZEOF(
['IFC4.IFCVERTEXPOINT',
'IFC4.IFCEDGECURVE',
'IFC4.IFCFACESURFACE'] * TYPEOF(temp)) = 1))
)) = 0;
WR23 : EXISTS(SELF\IfcRepresentation.RepresentationType);
WR24 : IfcShapeRepresentationTypes(SELF\IfcRepresentation.RepresentationType, SELF\IfcRepresentation.Items);
END_ENTITY;
*/
