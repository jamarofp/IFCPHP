<?php

namespace IFCPHP\IFC4\Entity;
use IFCPHP\IFC4 as IFC;

class IfcPropertyReferenceValue extends IfcSimpleProperty{

	static public $params = [
		[
			'name' => 'Name',
			'class' => 'Type\IfcIdentifier',
			'type' => 'object',
			'optional' => false,
		],
		[
			'name' => 'Description',
			'class' => 'Type\IfcText',
			'type' => 'object',
			'optional' => true,
		],
		[
			'name' => 'UsageName',
			'class' => 'Type\IfcText',
			'type' => 'object',
			'optional' => true,
		],
		[
			'name' => 'PropertyReference',
			'class' => 'Type\IfcObjectReferenceSelect',
			'type' => 'object',
			'optional' => true,
		],
	];
}
/* DEFINITION
ENTITY IfcPropertyReferenceValue
SUBTYPE OF (IfcSimpleProperty);
UsageName : OPTIONAL IfcText;
PropertyReference : OPTIONAL IfcObjectReferenceSelect;
END_ENTITY;
*/
