<?php

namespace IFCPHP\IFC4\Entity;
use IFCPHP\IFC4 as IFC;

class IfcTypeObject extends IfcObjectDefinition{

	static public $translationFR = 'Définition d\'un type d\'objet type';

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
			'name' => 'ApplicableOccurrence',
			'class' => 'Type\IfcIdentifier',
			'type' => 'object',
			'optional' => true,
		],
		[
			'name' => 'HasPropertySets',
			'class' => 'Entity\IfcPropertySetDefinition',
			'type' => 'array',
			'optional' => true,
			'min' => 1,
		],
	];
}
/* SUPERTYPE
	IfcTypeProcess
	IfcTypeProduct
	IfcTypeResource
*/


/* DEFINITION
ENTITY IfcTypeObject
SUPERTYPE OF (ONEOF
(IfcTypeProcess
,IfcTypeProduct
,IfcTypeResource))
SUBTYPE OF (IfcObjectDefinition);
ApplicableOccurrence : OPTIONAL IfcIdentifier;
HasPropertySets : OPTIONAL SET [1:?] OF IfcPropertySetDefinition;
INVERSE
Types : SET [0:1] OF IfcRelDefinesByType FOR RelatingType;
WHERE
WR1 : EXISTS(SELF\IfcRoot.Name);
END_ENTITY;
*/
