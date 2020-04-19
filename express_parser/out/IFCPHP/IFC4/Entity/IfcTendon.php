<?php

namespace IFCPHP\IFC4\Entity;
use IFCPHP\IFC4 as IFC;

class IfcTendon extends IfcReinforcingElement{

	static public $elementName = 'IFCTENDON';

	static public $translationFR = 'Cable';

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
			'name' => 'ObjectType',
			'class' => 'Type\IfcLabel',
			'type' => 'object',
			'optional' => true,
		],
		[
			'name' => 'ObjectPlacement',
			'class' => 'Entity\IfcObjectPlacement',
			'type' => 'object',
			'optional' => true,
		],
		[
			'name' => 'Representation',
			'class' => 'Entity\IfcProductRepresentation',
			'type' => 'object',
			'optional' => true,
		],
		[
			'name' => 'Tag',
			'class' => 'Type\IfcIdentifier',
			'type' => 'object',
			'optional' => true,
		],
		[
			'name' => 'SteelGrade',
			'class' => 'Type\IfcLabel',
			'type' => 'object',
			'optional' => true,
		],
		[
			'name' => 'PredefinedType',
			'class' => 'Type\IfcTendonTypeEnum',
			'type' => 'object',
			'optional' => true,
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
			'name' => 'TensionForce',
			'class' => 'Type\IfcForceMeasure',
			'type' => 'object',
			'optional' => true,
		],
		[
			'name' => 'PreStress',
			'class' => 'Type\IfcPressureMeasure',
			'type' => 'object',
			'optional' => true,
		],
		[
			'name' => 'FrictionCoefficient',
			'class' => 'Type\IfcNormalisedRatioMeasure',
			'type' => 'object',
			'optional' => true,
		],
		[
			'name' => 'AnchorageSlip',
			'class' => 'Type\IfcPositiveLengthMeasure',
			'type' => 'object',
			'optional' => true,
		],
		[
			'name' => 'MinCurvatureRadius',
			'class' => 'Type\IfcPositiveLengthMeasure',
			'type' => 'object',
			'optional' => true,
		],
	];
}
/* DEFINITION
ENTITY IfcTendon
SUBTYPE OF (IfcReinforcingElement);
PredefinedType : OPTIONAL IfcTendonTypeEnum;
NominalDiameter : OPTIONAL IfcPositiveLengthMeasure;
CrossSectionArea : OPTIONAL IfcAreaMeasure;
TensionForce : OPTIONAL IfcForceMeasure;
PreStress : OPTIONAL IfcPressureMeasure;
FrictionCoefficient : OPTIONAL IfcNormalisedRatioMeasure;
AnchorageSlip : OPTIONAL IfcPositiveLengthMeasure;
MinCurvatureRadius : OPTIONAL IfcPositiveLengthMeasure;
WHERE
CorrectPredefinedType : NOT(EXISTS(PredefinedType)) OR
(PredefinedType <> IfcTendonTypeEnum.USERDEFINED) OR
((PredefinedType = IfcTendonTypeEnum.USERDEFINED) AND EXISTS (SELF\IfcObject.ObjectType));
CorrectTypeAssigned : (SIZEOF(IsTypedBy) = 0) OR
('IFC4.IFCTENDONTYPE' IN TYPEOF(SELF\IfcObject.IsTypedBy[1].RelatingType));
END_ENTITY;
*/
