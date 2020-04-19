<?php

namespace IFCPHP\IFC4\Entity;
use IFCPHP\IFC4 as IFC;

class IfcTendonType extends IfcReinforcingElementType{

	static public $elementName = 'IFCTENDONTYPE';

	static public $translationFR = 'Type de cable';

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
			'class' => 'Type\IfcTendonTypeEnum',
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
			'name' => 'CrossSectionArea',
			'class' => 'Type\IfcAreaMeasure',
			'type' => 'object',
			'optional' => true,
		],
		[
			'name' => 'SheethDiameter',
			'class' => 'Type\IfcPositiveLengthMeasure',
			'type' => 'object',
			'optional' => true,
		],
	];
}
/* DEFINITION
ENTITY IfcTendonType
SUBTYPE OF (IfcReinforcingElementType);
PredefinedType : IfcTendonTypeEnum;
NominalDiameter : OPTIONAL IfcPositiveLengthMeasure;
CrossSectionArea : OPTIONAL IfcAreaMeasure;
SheethDiameter : OPTIONAL IfcPositiveLengthMeasure;
WHERE
CorrectPredefinedType : (PredefinedType <> IfcTendonTypeEnum.USERDEFINED) OR
((PredefinedType = IfcTendonTypeEnum.USERDEFINED) AND EXISTS(SELF\IfcElementType.ElementType));
END_ENTITY;
*/
