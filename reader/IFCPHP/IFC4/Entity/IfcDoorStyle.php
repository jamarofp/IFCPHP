<?php

namespace IFCPHP\IFC4\Entity;
use IFCPHP\IFC4 as IFC;

class IfcDoorStyle extends IfcTypeProduct{

	static public $translationFR = 'Style de porte';

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
			'name' => 'ApplicableOccurrence',
			'class' => 'Type\IfcIdentifier',
			'type' => 'object',
			'optional' => true,
		],
		[
			'name' => 'HasPropertySets',
			'class' => 'Entity\IfcPropertySetDefinition',
			'type' => 'array',
			'optional' => true,
			'min' => 1,
		],
		[
			'name' => 'RepresentationMaps',
			'class' => 'Entity\IfcRepresentationMap',
			'type' => 'array',
			'optional' => true,
			'min' => 1,
		],
		[
			'name' => 'Tag',
			'class' => 'Type\IfcLabel',
			'type' => 'object',
			'optional' => true,
		],
		[
			'name' => 'OperationType',
			'class' => 'Type\IfcDoorStyleOperationEnum',
			'type' => 'object',
			'optional' => false,
		],
		[
			'name' => 'ConstructionType',
			'class' => 'Type\IfcDoorStyleConstructionEnum',
			'type' => 'object',
			'optional' => false,
		],
		[
			'name' => 'ParameterTakesPrecedence',
			'class' => 'Base\Boolean',
			'type' => 'object',
			'optional' => false,
		],
		[
			'name' => 'Sizeable',
			'class' => 'Base\Boolean',
			'type' => 'object',
			'optional' => false,
		],
	];
}
/* DEFINITION
ENTITY IfcDoorStyle
SUBTYPE OF (IfcTypeProduct);
OperationType : IfcDoorStyleOperationEnum;
ConstructionType : IfcDoorStyleConstructionEnum;
ParameterTakesPrecedence : BOOLEAN;
Sizeable : BOOLEAN;
END_ENTITY;
*/
