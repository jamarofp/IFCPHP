<?php

namespace IFCPHP\IFC4\Entity;
use IFCPHP\IFC4 as IFC;

class IfcWindowStyle extends IfcTypeProduct{

	static public $elementName = 'IFCWINDOWSTYLE';

	static public $translationFR = 'Style de fenêtre';

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
			'name' => 'ConstructionType',
			'class' => 'Type\IfcWindowStyleConstructionEnum',
			'type' => 'object',
			'optional' => false,
		],
		[
			'name' => 'OperationType',
			'class' => 'Type\IfcWindowStyleOperationEnum',
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
ENTITY IfcWindowStyle
SUBTYPE OF (IfcTypeProduct);
ConstructionType : IfcWindowStyleConstructionEnum;
OperationType : IfcWindowStyleOperationEnum;
ParameterTakesPrecedence : BOOLEAN;
Sizeable : BOOLEAN;
END_ENTITY;
*/
