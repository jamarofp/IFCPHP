<?php

namespace IFCPHP\IFC4\Entity;
use IFCPHP\IFC4 as IFC;

class IfcReinforcementDefinitionProperties extends IfcPreDefinedPropertySet{

	static public $translationFR = 'Propriétés de définition du ferraillage';

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
			'name' => 'DefinitionType',
			'class' => 'Type\IfcLabel',
			'type' => 'object',
			'optional' => true,
		],
		[
			'name' => 'ReinforcementSectionDefinitions',
			'class' => 'Entity\IfcSectionReinforcementProperties',
			'type' => 'array',
			'optional' => false,
			'min' => 1,
		],
	];
}
/* DEFINITION
ENTITY IfcReinforcementDefinitionProperties
SUBTYPE OF (IfcPreDefinedPropertySet);
DefinitionType : OPTIONAL IfcLabel;
ReinforcementSectionDefinitions : LIST [1:?] OF IfcSectionReinforcementProperties;
END_ENTITY;
*/
