<?php

namespace IFCPHP\IFC4\Entity;
use IFCPHP\IFC4 as IFC;

class IfcReinforcingBarType extends IfcReinforcingElementType{

	static public $translationFR = 'Type de barre d\'armature';

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
			'class' => 'Type\IfcReinforcingBarTypeEnum',
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
			'name' => 'BarLength',
			'class' => 'Type\IfcPositiveLengthMeasure',
			'type' => 'object',
			'optional' => true,
		],
		[
			'name' => 'BarSurface',
			'class' => 'Type\IfcReinforcingBarSurfaceEnum',
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
ENTITY IfcReinforcingBarType
SUBTYPE OF (IfcReinforcingElementType);
PredefinedType : IfcReinforcingBarTypeEnum;
NominalDiameter : OPTIONAL IfcPositiveLengthMeasure;
CrossSectionArea : OPTIONAL IfcAreaMeasure;
BarLength : OPTIONAL IfcPositiveLengthMeasure;
BarSurface : OPTIONAL IfcReinforcingBarSurfaceEnum;
BendingShapeCode : OPTIONAL IfcLabel;
BendingParameters : OPTIONAL LIST [1:?] OF IfcBendingParameterSelect;
WHERE
CorrectPredefinedType : (PredefinedType <> IfcReinforcingBarTypeEnum.USERDEFINED) OR
((PredefinedType = IfcReinforcingBarTypeEnum.USERDEFINED) AND EXISTS(SELF\IfcElementType.ElementType));
BendingShapeCodeProvided : NOT EXISTS(BendingParameters) OR EXISTS(BendingShapeCode);
END_ENTITY;
*/
