<?php

namespace IFCPHP\IFC4\Entity;
use IFCPHP\IFC4 as IFC;

class IfcRelAssociatesLibrary extends IfcRelAssociates{

	static public $elementName = 'IFCRELASSOCIATESLIBRARY';

	static public $translationFR = 'Association à librairie';

	static public $params = [
		[
			'name' => 'GlobalId',
			'class' => 'Type\IfcGloballyUniqueId',
			'type' => 'object',
			'optional' => false,
		],
		[
			'name' => 'OwnerHistory',
			'class' => 'Entity\IfcOwnerHistory',
			'type' => 'object',
			'optional' => true,
		],
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
			'name' => 'RelatedObjects',
			'class' => 'Type\IfcDefinitionSelect',
			'type' => 'array',
			'optional' => false,
			'min' => 1,
		],
		[
			'name' => 'RelatingLibrary',
			'class' => 'Type\IfcLibrarySelect',
			'type' => 'object',
			'optional' => false,
		],
	];
}
/* DEFINITION
ENTITY IfcRelAssociatesLibrary
SUBTYPE OF (IfcRelAssociates);
RelatingLibrary : IfcLibrarySelect;
END_ENTITY;
*/
