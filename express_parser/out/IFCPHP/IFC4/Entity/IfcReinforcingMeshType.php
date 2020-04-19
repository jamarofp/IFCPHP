<?php

namespace IFCPHP\IFC4\Entity;
use IFCPHP\IFC4 as IFC;

class IfcReinforcingMeshType extends IfcReinforcingElementType{

	static public $elementName = 'IFCREINFORCINGMESHTYPE';

	static public $translationFR = 'Type de treillis';

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
			'class' => 'Type\IfcReinforcingMeshTypeEnum',
			'type' => 'object',
			'optional' => false,
		],
		[
			'name' => 'MeshLength',
			'class' => 'Type\IfcPositiveLengthMeasure',
			'type' => 'object',
			'optional' => true,
		],
		[
			'name' => 'MeshWidth',
			'class' => 'Type\IfcPositiveLengthMeasure',
			'type' => 'object',
			'optional' => true,
		],
		[
			'name' => 'LongitudinalBarNominalDiameter',
			'class' => 'Type\IfcPositiveLengthMeasure',
			'type' => 'object',
			'optional' => true,
		],
		[
			'name' => 'TransverseBarNominalDiameter',
			'class' => 'Type\IfcPositiveLengthMeasure',
			'type' => 'object',
			'optional' => true,
		],
		[
			'name' => 'LongitudinalBarCrossSectionArea',
			'class' => 'Type\IfcAreaMeasure',
			'type' => 'object',
			'optional' => true,
		],
		[
			'name' => 'TransverseBarCrossSectionArea',
			'class' => 'Type\IfcAreaMeasure',
			'type' => 'object',
			'optional' => true,
		],
		[
			'name' => 'LongitudinalBarSpacing',
			'class' => 'Type\IfcPositiveLengthMeasure',
			'type' => 'object',
			'optional' => true,
		],
		[
			'name' => 'TransverseBarSpacing',
			'class' => 'Type\IfcPositiveLengthMeasure',
			'type' => 'object',
			'optional' => true,
		],
		[
			'name' => 'BendingShapeCode',
			'class' => 'Type\IfcLabel',
			'type' => 'object',
			'optional' => true,
		],
		[
			'name' => 'BendingParameters',
			'class' => 'Type\IfcBendingParameterSelect',
			'type' => 'array',
			'optional' => true,
			'min' => 1,
		],
	];
}
/* DEFINITION
ENTITY IfcReinforcingMeshType
SUBTYPE OF (IfcReinforcingElementType);
PredefinedType : IfcReinforcingMeshTypeEnum;
MeshLength : OPTIONAL IfcPositiveLengthMeasure;
MeshWidth : OPTIONAL IfcPositiveLengthMeasure;
LongitudinalBarNominalDiameter : OPTIONAL IfcPositiveLengthMeasure;
TransverseBarNominalDiameter : OPTIONAL IfcPositiveLengthMeasure;
LongitudinalBarCrossSectionArea : OPTIONAL IfcAreaMeasure;
TransverseBarCrossSectionArea : OPTIONAL IfcAreaMeasure;
LongitudinalBarSpacing : OPTIONAL IfcPositiveLengthMeasure;
TransverseBarSpacing : OPTIONAL IfcPositiveLengthMeasure;
BendingShapeCode : OPTIONAL IfcLabel;
BendingParameters : OPTIONAL LIST [1:?] OF IfcBendingParameterSelect;
WHERE
CorrectPredefinedType : (PredefinedType <> IfcReinforcingMeshTypeEnum.USERDEFINED) OR
((PredefinedType = IfcReinforcingMeshTypeEnum.USERDEFINED) AND EXISTS(SELF\IfcElementType.ElementType));
BendingShapeCodeProvided : NOT EXISTS(BendingParameters) OR EXISTS(BendingShapeCode);
END_ENTITY;
*/
