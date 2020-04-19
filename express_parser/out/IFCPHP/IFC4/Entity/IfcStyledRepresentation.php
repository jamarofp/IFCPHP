<?php

namespace IFCPHP\IFC4\Entity;
use IFCPHP\IFC4 as IFC;

class IfcStyledRepresentation extends IfcStyleModel{

	static public $elementName = 'IFCSTYLEDREPRESENTATION';

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
ENTITY IfcStyledRepresentation
SUBTYPE OF (IfcStyleModel);
WHERE
OnlyStyledItems : SIZEOF(QUERY(temp <* SELF\IfcRepresentation.Items |
(NOT('IFC4.IFCSTYLEDITEM' IN TYPEOF(temp)))
)) = 0;
END_ENTITY;
*/
