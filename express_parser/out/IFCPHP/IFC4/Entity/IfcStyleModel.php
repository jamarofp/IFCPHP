<?php

namespace IFCPHP\IFC4\Entity;
use IFCPHP\IFC4 as IFC;

class IfcStyleModel extends IfcRepresentation{

	static public $elementName = 'IFCSTYLEMODEL';

	static public $translationFR = 'Modèle de style';

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
	IfcStyledRepresentation
*/


/* DEFINITION
ENTITY IfcStyleModel
ABSTRACT SUPERTYPE OF (ONEOF
(IfcStyledRepresentation))
SUBTYPE OF (IfcRepresentation);
END_ENTITY;
*/
