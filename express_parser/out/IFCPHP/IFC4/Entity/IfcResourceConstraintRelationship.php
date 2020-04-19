<?php

namespace IFCPHP\IFC4\Entity;
use IFCPHP\IFC4 as IFC;

class IfcResourceConstraintRelationship extends IfcResourceLevelRelationship{

	static public $elementName = 'IFCRESOURCECONSTRAINTRELATIONSHIP';

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
			'name' => 'RelatingConstraint',
			'class' => 'Entity\IfcConstraint',
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
ENTITY IfcResourceConstraintRelationship
SUBTYPE OF (IfcResourceLevelRelationship);
RelatingConstraint : IfcConstraint;
RelatedResourceObjects : SET [1:?] OF IfcResourceObjectSelect;
END_ENTITY;
*/
