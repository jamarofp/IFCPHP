<?php

namespace IFCPHP\IFC4\Entity;
use IFCPHP\IFC4 as IFC;

class IfcExternalReferenceRelationship extends IfcResourceLevelRelationship{

	static public $params = [
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
			'name' => 'RelatingReference',
			'class' => 'Entity\IfcExternalReference',
			'type' => 'object',
			'optional' => false,
		],
		[
			'name' => 'RelatedResourceObjects',
			'class' => 'Type\IfcResourceObjectSelect',
			'type' => 'array',
			'optional' => false,
			'min' => 1,
		],
	];
}
/* DEFINITION
ENTITY IfcExternalReferenceRelationship
SUBTYPE OF (IfcResourceLevelRelationship);
RelatingReference : IfcExternalReference;
RelatedResourceObjects : SET [1:?] OF IfcResourceObjectSelect;
END_ENTITY;
*/
