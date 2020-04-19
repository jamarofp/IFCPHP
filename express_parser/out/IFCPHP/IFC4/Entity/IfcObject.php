<?php

namespace IFCPHP\IFC4\Entity;
use IFCPHP\IFC4 as IFC;

class IfcObject extends IfcObjectDefinition{

	static public $elementName = 'IFCOBJECT';

	static public $translationFR = 'Objet';

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
	];
}
/* SUPERTYPE
	IfcActor
	IfcControl
	IfcGroup
	IfcProcess
	IfcProduct
	IfcResource
*/


/* DEFINITION
ENTITY IfcObject
ABSTRACT SUPERTYPE OF (ONEOF
(IfcActor
,IfcControl
,IfcGroup
,IfcProcess
,IfcProduct
,IfcResource))
SUBTYPE OF (IfcObjectDefinition);
ObjectType : OPTIONAL IfcLabel;
INVERSE
IsDeclaredBy : SET [0:1] OF IfcRelDefinesByObject FOR RelatedObjects;
Declares : SET [0:?] OF IfcRelDefinesByObject FOR RelatingObject;
IsTypedBy : SET [0:1] OF IfcRelDefinesByType FOR RelatedObjects;
IsDefinedBy : SET [0:?] OF IfcRelDefinesByProperties FOR RelatedObjects;
END_ENTITY;
*/
