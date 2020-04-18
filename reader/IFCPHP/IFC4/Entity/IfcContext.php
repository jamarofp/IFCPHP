<?php

namespace IFCPHP\IFC4\Entity;
use IFCPHP\IFC4 as IFC;

class IfcContext extends IfcObjectDefinition{

	static public $translationFR = 'Contexte';

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
			'name' => 'ObjectType',
			'class' => 'Type\IfcLabel',
			'type' => 'object',
			'optional' => true,
		],
		[
			'name' => 'LongName',
			'class' => 'Type\IfcLabel',
			'type' => 'object',
			'optional' => true,
		],
		[
			'name' => 'Phase',
			'class' => 'Type\IfcLabel',
			'type' => 'object',
			'optional' => true,
		],
		[
			'name' => 'RepresentationContexts',
			'class' => 'Entity\IfcRepresentationContext',
			'type' => 'array',
			'optional' => true,
			'min' => 1,
		],
		[
			'name' => 'UnitsInContext',
			'class' => 'Entity\IfcUnitAssignment',
			'type' => 'object',
			'optional' => true,
		],
	];
}
/* SUPERTYPE
	IfcProject
	IfcProjectLibrary
*/


/* DEFINITION
ENTITY IfcContext
ABSTRACT SUPERTYPE OF (ONEOF
(IfcProject
,IfcProjectLibrary))
SUBTYPE OF (IfcObjectDefinition);
ObjectType : OPTIONAL IfcLabel;
LongName : OPTIONAL IfcLabel;
Phase : OPTIONAL IfcLabel;
RepresentationContexts : OPTIONAL SET [1:?] OF IfcRepresentationContext;
UnitsInContext : OPTIONAL IfcUnitAssignment;
INVERSE
IsDefinedBy : SET [0:?] OF IfcRelDefinesByProperties FOR RelatedObjects;
Declares : SET [0:?] OF IfcRelDeclares FOR RelatingContext;
END_ENTITY;
*/
