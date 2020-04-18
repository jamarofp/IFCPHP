<?php

namespace IFCPHP\IFC4\Entity;
use IFCPHP\IFC4 as IFC;

class IfcPropertySetDefinition extends IfcPropertyDefinition{

	static public $translationFR = 'Définition d\'ensemble de propriété';

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
	IfcPreDefinedPropertySet
	IfcPropertySet
	IfcQuantitySet
*/


/* DEFINITION
ENTITY IfcPropertySetDefinition
ABSTRACT SUPERTYPE OF (ONEOF
(IfcPreDefinedPropertySet
,IfcPropertySet
,IfcQuantitySet))
SUBTYPE OF (IfcPropertyDefinition);
INVERSE
DefinesType : SET [0:?] OF IfcTypeObject FOR HasPropertySets;
IsDefinedBy : SET [0:?] OF IfcRelDefinesByTemplate FOR RelatedPropertySets;
DefinesOccurrence : SET [0:1] OF IfcRelDefinesByProperties FOR RelatingPropertyDefinition;
END_ENTITY;
*/
