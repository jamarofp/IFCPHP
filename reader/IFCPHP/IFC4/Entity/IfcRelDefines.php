<?php

namespace IFCPHP\IFC4\Entity;
use IFCPHP\IFC4 as IFC;

class IfcRelDefines extends IfcRelationship{

	static public $translationFR = 'Définition';

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
	];
}
/* SUPERTYPE
	IfcRelDefinesByObject
	IfcRelDefinesByProperties
	IfcRelDefinesByTemplate
	IfcRelDefinesByType
*/


/* DEFINITION
ENTITY IfcRelDefines
ABSTRACT SUPERTYPE OF (ONEOF
(IfcRelDefinesByObject
,IfcRelDefinesByProperties
,IfcRelDefinesByTemplate
,IfcRelDefinesByType))
SUBTYPE OF (IfcRelationship);
END_ENTITY;
*/
