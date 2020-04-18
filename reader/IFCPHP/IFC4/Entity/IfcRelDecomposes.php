<?php

namespace IFCPHP\IFC4\Entity;
use IFCPHP\IFC4 as IFC;

class IfcRelDecomposes extends IfcRelationship{

	static public $translationFR = 'Décomposition';

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
	IfcRelAggregates
	IfcRelNests
	IfcRelProjectsElement
	IfcRelVoidsElement
*/


/* DEFINITION
ENTITY IfcRelDecomposes
ABSTRACT SUPERTYPE OF (ONEOF
(IfcRelAggregates
,IfcRelNests
,IfcRelProjectsElement
,IfcRelVoidsElement))
SUBTYPE OF (IfcRelationship);
END_ENTITY;
*/
