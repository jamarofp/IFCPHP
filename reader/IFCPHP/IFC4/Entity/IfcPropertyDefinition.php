<?php

namespace IFCPHP\IFC4\Entity;
use IFCPHP\IFC4 as IFC;

class IfcPropertyDefinition extends IfcRoot{

	static public $translationFR = 'Définition de propriété';

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
	IfcPropertySetDefinition
	IfcPropertyTemplateDefinition
*/


/* DEFINITION
ENTITY IfcPropertyDefinition
ABSTRACT SUPERTYPE OF (ONEOF
(IfcPropertySetDefinition
,IfcPropertyTemplateDefinition))
SUBTYPE OF (IfcRoot);
INVERSE
HasContext : SET [0:1] OF IfcRelDeclares FOR RelatedDefinitions;
HasAssociations : SET [0:?] OF IfcRelAssociates FOR RelatedObjects;
END_ENTITY;
*/
