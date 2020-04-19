<?php

namespace IFCPHP\IFC4\Entity;
use IFCPHP\IFC4 as IFC;

class IfcTopologyRepresentation extends IfcShapeModel{

	static public $elementName = 'IFCTOPOLOGYREPRESENTATION';

	static public $translationFR = 'Représentation topologique';

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
ENTITY IfcTopologyRepresentation
SUBTYPE OF (IfcShapeModel);
WHERE
WR21 : SIZEOF(QUERY(temp <* SELF\IfcRepresentation.Items |
NOT('IFC4.IFCTOPOLOGICALREPRESENTATIONITEM' IN TYPEOF(temp))
)) = 0;
WR22 : EXISTS(SELF\IfcRepresentation.RepresentationType);
WR23 : IfcTopologyRepresentationTypes(SELF\IfcRepresentation.RepresentationType, SELF\IfcRepresentation.Items);
END_ENTITY;
*/
