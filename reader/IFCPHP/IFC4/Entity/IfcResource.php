<?php

namespace IFCPHP\IFC4\Entity;
use IFCPHP\IFC4 as IFC;

class IfcResource extends IfcObject{

	static public $translationFR = 'Ressource';

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
			'name' => 'Identification',
			'class' => 'Type\IfcIdentifier',
			'type' => 'object',
			'optional' => true,
		],
		[
			'name' => 'LongDescription',
			'class' => 'Type\IfcText',
			'type' => 'object',
			'optional' => true,
		],
	];
}
/* SUPERTYPE
	IfcConstructionResource
*/


/* DEFINITION
ENTITY IfcResource
ABSTRACT SUPERTYPE OF (ONEOF
(IfcConstructionResource))
SUBTYPE OF (IfcObject);
Identification : OPTIONAL IfcIdentifier;
LongDescription : OPTIONAL IfcText;
INVERSE
ResourceOf : SET [0:?] OF IfcRelAssignsToResource FOR RelatingResource;
END_ENTITY;
*/
