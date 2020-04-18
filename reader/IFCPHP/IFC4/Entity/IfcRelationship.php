<?php

namespace IFCPHP\IFC4\Entity;
use IFCPHP\IFC4 as IFC;

class IfcRelationship extends IfcRoot{

	static public $translationFR = 'Relation';

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
	IfcRelAssigns
	IfcRelAssociates
	IfcRelConnects
	IfcRelDeclares
	IfcRelDecomposes
	IfcRelDefines
*/


/* DEFINITION
ENTITY IfcRelationship
ABSTRACT SUPERTYPE OF (ONEOF
(IfcRelAssigns
,IfcRelAssociates
,IfcRelConnects
,IfcRelDeclares
,IfcRelDecomposes
,IfcRelDefines))
SUBTYPE OF (IfcRoot);
END_ENTITY;
*/
