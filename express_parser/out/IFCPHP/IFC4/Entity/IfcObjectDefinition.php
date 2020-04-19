<?php

namespace IFCPHP\IFC4\Entity;
use IFCPHP\IFC4 as IFC;

class IfcObjectDefinition extends IfcRoot{

	static public $elementName = 'IFCOBJECTDEFINITION';

	static public $translationFR = 'Définition d\'objet';

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
	IfcContext
	IfcObject
	IfcTypeObject
*/


/* DEFINITION
ENTITY IfcObjectDefinition
ABSTRACT SUPERTYPE OF (ONEOF
(IfcContext
,IfcObject
,IfcTypeObject))
SUBTYPE OF (IfcRoot);
INVERSE
HasAssignments : SET [0:?] OF IfcRelAssigns FOR RelatedObjects;
Nests : SET [0:1] OF IfcRelNests FOR RelatedObjects;
IsNestedBy : SET [0:?] OF IfcRelNests FOR RelatingObject;
HasContext : SET [0:1] OF IfcRelDeclares FOR RelatedDefinitions;
IsDecomposedBy : SET [0:?] OF IfcRelAggregates FOR RelatingObject;
Decomposes : SET [0:1] OF IfcRelAggregates FOR RelatedObjects;
HasAssociations : SET [0:?] OF IfcRelAssociates FOR RelatedObjects;
END_ENTITY;
*/
