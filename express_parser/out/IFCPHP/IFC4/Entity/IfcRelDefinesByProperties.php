<?php

namespace IFCPHP\IFC4\Entity;
use IFCPHP\IFC4 as IFC;

class IfcRelDefinesByProperties extends IfcRelDefines{

	static public $elementName = 'IFCRELDEFINESBYPROPERTIES';

	static public $translationFR = 'Définition par propriétés';

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
			'class' => 'Entity\IfcObjectDefinition',
			'type' => 'array',
			'optional' => false,
			'min' => 1,
			'max' => 1,
		],
		[
			'name' => 'RelatingPropertyDefinition',
			'class' => 'Type\IfcPropertySetDefinitionSelect',
			'type' => 'object',
			'optional' => false,
		],
	];
}
/* DEFINITION
ENTITY IfcRelDefinesByProperties
SUBTYPE OF (IfcRelDefines);
RelatedObjects : SET [1:1] OF IfcObjectDefinition;
RelatingPropertyDefinition : IfcPropertySetDefinitionSelect;
END_ENTITY;
*/
