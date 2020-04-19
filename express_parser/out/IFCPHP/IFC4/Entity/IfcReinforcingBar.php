<?php

namespace IFCPHP\IFC4\Entity;
use IFCPHP\IFC4 as IFC;

class IfcReinforcingBar extends IfcReinforcingElement{

	static public $elementName = 'IFCREINFORCINGBAR';

	static public $translationFR = 'barre d\'armature';

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
			'name' => 'PredefinedType',
			'class' => 'Type\IfcReinforcingBarTypeEnum',
			'type' => 'object',
			'optional' => true,
		],
		[
			'name' => 'BarSurface',
			'class' => 'Type\IfcReinforcingBarSurfaceEnum',
			'type' => 'object',
			'optional' => true,
		],
	];
}
/* DEFINITION
ENTITY IfcReinforcingBar
SUBTYPE OF (IfcReinforcingElement);
NominalDiameter : OPTIONAL IfcPositiveLengthMeasure;
CrossSectionArea : OPTIONAL IfcAreaMeasure;
BarLength : OPTIONAL IfcPositiveLengthMeasure;
PredefinedType : OPTIONAL IfcReinforcingBarTypeEnum;
BarSurface : OPTIONAL IfcReinforcingBarSurfaceEnum;
WHERE
CorrectPredefinedType : NOT EXISTS(PredefinedType) OR
(PredefinedType <> IfcReinforcingBarTypeEnum.USERDEFINED) OR
((PredefinedType = IfcReinforcingBarTypeEnum.USERDEFINED) AND EXISTS(SELF\IfcObject.ObjectType));
CorrectTypeAssigned : (SIZEOF(IsTypedBy) = 0) OR
('IFC4.IFCREINFORCINGBARTYPE' IN TYPEOF(SELF\IfcObject.IsTypedBy[1].RelatingType));
END_ENTITY;
*/
