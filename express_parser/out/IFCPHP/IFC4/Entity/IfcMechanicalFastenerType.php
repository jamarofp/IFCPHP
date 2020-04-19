<?php

namespace IFCPHP\IFC4\Entity;
use IFCPHP\IFC4 as IFC;

class IfcMechanicalFastenerType extends IfcElementComponentType{

	static public $elementName = 'IFCMECHANICALFASTENERTYPE';

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
			'class' => 'Type\IfcMechanicalFastenerTypeEnum',
			'type' => 'object',
			'optional' => false,
		],
		[
			'name' => 'NominalDiameter',
			'class' => 'Type\IfcPositiveLengthMeasure',
			'type' => 'object',
			'optional' => true,
		],
		[
			'name' => 'NominalLength',
			'class' => 'Type\IfcPositiveLengthMeasure',
			'type' => 'object',
			'optional' => true,
		],
	];
}
/* DEFINITION
ENTITY IfcMechanicalFastenerType
SUBTYPE OF (IfcElementComponentType);
PredefinedType : IfcMechanicalFastenerTypeEnum;
NominalDiameter : OPTIONAL IfcPositiveLengthMeasure;
NominalLength : OPTIONAL IfcPositiveLengthMeasure;
WHERE
CorrectPredefinedType : (PredefinedType <> IfcMechanicalFastenerTypeEnum.USERDEFINED) OR
((PredefinedType = IfcMechanicalFastenerTypeEnum.USERDEFINED) AND EXISTS(SELF\IfcElementType.ElementType));
END_ENTITY;
*/
