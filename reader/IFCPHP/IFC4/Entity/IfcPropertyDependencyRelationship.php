<?php

namespace IFCPHP\IFC4\Entity;
use IFCPHP\IFC4 as IFC;

class IfcPropertyDependencyRelationship extends IfcResourceLevelRelationship{

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
			'name' => 'DependingProperty',
			'class' => 'Entity\IfcProperty',
			'type' => 'object',
			'optional' => false,
		],
		[
			'name' => 'DependantProperty',
			'class' => 'Entity\IfcProperty',
			'type' => 'object',
			'optional' => false,
		],
		[
			'name' => 'Expression',
			'class' => 'Type\IfcText',
			'type' => 'object',
			'optional' => true,
		],
	];
}
/* DEFINITION
ENTITY IfcPropertyDependencyRelationship
SUBTYPE OF (IfcResourceLevelRelationship);
DependingProperty : IfcProperty;
DependantProperty : IfcProperty;
Expression : OPTIONAL IfcText;
WHERE
NoSelfReference : DependingProperty :<>: DependantProperty;
END_ENTITY;
*/
