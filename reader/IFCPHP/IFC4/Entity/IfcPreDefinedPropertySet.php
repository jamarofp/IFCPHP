<?php

namespace IFCPHP\IFC4\Entity;
use IFCPHP\IFC4 as IFC;

class IfcPreDefinedPropertySet extends IfcPropertySetDefinition{

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
	IfcDoorLiningProperties
	IfcDoorPanelProperties
	IfcPermeableCoveringProperties
	IfcReinforcementDefinitionProperties
	IfcWindowLiningProperties
	IfcWindowPanelProperties
*/


/* DEFINITION
ENTITY IfcPreDefinedPropertySet
ABSTRACT SUPERTYPE OF (ONEOF
(IfcDoorLiningProperties
,IfcDoorPanelProperties
,IfcPermeableCoveringProperties
,IfcReinforcementDefinitionProperties
,IfcWindowLiningProperties
,IfcWindowPanelProperties))
SUBTYPE OF (IfcPropertySetDefinition);
END_ENTITY;
*/
