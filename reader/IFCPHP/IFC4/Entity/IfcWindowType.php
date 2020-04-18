<?php

namespace IFCPHP\IFC4\Entity;
use IFCPHP\IFC4 as IFC;

class IfcWindowType extends IfcBuildingElementType{

	static public $translationFR = 'Type de fenêtre';

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
			'name' => 'ElementType',
			'class' => 'Type\IfcLabel',
			'type' => 'object',
			'optional' => true,
		],
		[
			'name' => 'PredefinedType',
			'class' => 'Type\IfcWindowTypeEnum',
			'type' => 'object',
			'optional' => false,
		],
		[
			'name' => 'PartitioningType',
			'class' => 'Type\IfcWindowTypePartitioningEnum',
			'type' => 'object',
			'optional' => false,
		],
		[
			'name' => 'ParameterTakesPrecedence',
			'class' => 'Base\Boolean',
			'type' => 'object',
			'optional' => true,
		],
		[
			'name' => 'UserDefinedPartitioningType',
			'class' => 'Type\IfcLabel',
			'type' => 'object',
			'optional' => true,
		],
	];
}
/* DEFINITION
ENTITY IfcWindowType
SUBTYPE OF (IfcBuildingElementType);
PredefinedType : IfcWindowTypeEnum;
PartitioningType : IfcWindowTypePartitioningEnum;
ParameterTakesPrecedence : OPTIONAL BOOLEAN;
UserDefinedPartitioningType : OPTIONAL IfcLabel;
WHERE
CorrectPredefinedType : (PredefinedType <> IfcWindowTypeEnum.USERDEFINED) OR
((PredefinedType = IfcWindowTypeEnum.USERDEFINED) AND EXISTS(SELF\IfcElementType.ElementType));
END_ENTITY;
*/
