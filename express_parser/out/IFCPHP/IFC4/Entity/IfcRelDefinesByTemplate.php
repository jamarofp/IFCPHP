<?php

namespace IFCPHP\IFC4\Entity;
use IFCPHP\IFC4 as IFC;

class IfcRelDefinesByTemplate extends IfcRelDefines{

	static public $elementName = 'IFCRELDEFINESBYTEMPLATE';

	static public $translationFR = 'Définition par modèle';

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
			'name' => 'RelatedPropertySets',
			'class' => 'Entity\IfcPropertySetDefinition',
			'type' => 'array',
			'optional' => false,
			'min' => 1,
		],
		[
			'name' => 'RelatingTemplate',
			'class' => 'Entity\IfcPropertySetTemplate',
			'type' => 'object',
			'optional' => false,
		],
	];
}
/* DEFINITION
ENTITY IfcRelDefinesByTemplate
SUBTYPE OF (IfcRelDefines);
RelatedPropertySets : SET [1:?] OF IfcPropertySetDefinition;
RelatingTemplate : IfcPropertySetTemplate;
END_ENTITY;
*/
