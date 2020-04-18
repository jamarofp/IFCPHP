<?php

namespace IFCPHP\IFC4\Entity;
use IFCPHP\IFC4 as IFC;

class IfcDoorLiningProperties extends IfcPreDefinedPropertySet{

	static public $translationFR = 'Propriétés du cadre de porte';

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
			'name' => 'LiningDepth',
			'class' => 'Type\IfcPositiveLengthMeasure',
			'type' => 'object',
			'optional' => true,
		],
		[
			'name' => 'LiningThickness',
			'class' => 'Type\IfcNonNegativeLengthMeasure',
			'type' => 'object',
			'optional' => true,
		],
		[
			'name' => 'ThresholdDepth',
			'class' => 'Type\IfcPositiveLengthMeasure',
			'type' => 'object',
			'optional' => true,
		],
		[
			'name' => 'ThresholdThickness',
			'class' => 'Type\IfcNonNegativeLengthMeasure',
			'type' => 'object',
			'optional' => true,
		],
		[
			'name' => 'TransomThickness',
			'class' => 'Type\IfcNonNegativeLengthMeasure',
			'type' => 'object',
			'optional' => true,
		],
		[
			'name' => 'TransomOffset',
			'class' => 'Type\IfcLengthMeasure',
			'type' => 'object',
			'optional' => true,
		],
		[
			'name' => 'LiningOffset',
			'class' => 'Type\IfcLengthMeasure',
			'type' => 'object',
			'optional' => true,
		],
		[
			'name' => 'ThresholdOffset',
			'class' => 'Type\IfcLengthMeasure',
			'type' => 'object',
			'optional' => true,
		],
		[
			'name' => 'CasingThickness',
			'class' => 'Type\IfcPositiveLengthMeasure',
			'type' => 'object',
			'optional' => true,
		],
		[
			'name' => 'CasingDepth',
			'class' => 'Type\IfcPositiveLengthMeasure',
			'type' => 'object',
			'optional' => true,
		],
		[
			'name' => 'ShapeAspectStyle',
			'class' => 'Entity\IfcShapeAspect',
			'type' => 'object',
			'optional' => true,
		],
		[
			'name' => 'LiningToPanelOffsetX',
			'class' => 'Type\IfcLengthMeasure',
			'type' => 'object',
			'optional' => true,
		],
		[
			'name' => 'LiningToPanelOffsetY',
			'class' => 'Type\IfcLengthMeasure',
			'type' => 'object',
			'optional' => true,
		],
	];
}
/* DEFINITION
ENTITY IfcDoorLiningProperties
SUBTYPE OF (IfcPreDefinedPropertySet);
LiningDepth : OPTIONAL IfcPositiveLengthMeasure;
LiningThickness : OPTIONAL IfcNonNegativeLengthMeasure;
ThresholdDepth : OPTIONAL IfcPositiveLengthMeasure;
ThresholdThickness : OPTIONAL IfcNonNegativeLengthMeasure;
TransomThickness : OPTIONAL IfcNonNegativeLengthMeasure;
TransomOffset : OPTIONAL IfcLengthMeasure;
LiningOffset : OPTIONAL IfcLengthMeasure;
ThresholdOffset : OPTIONAL IfcLengthMeasure;
CasingThickness : OPTIONAL IfcPositiveLengthMeasure;
CasingDepth : OPTIONAL IfcPositiveLengthMeasure;
ShapeAspectStyle : OPTIONAL IfcShapeAspect;
LiningToPanelOffsetX : OPTIONAL IfcLengthMeasure;
LiningToPanelOffsetY : OPTIONAL IfcLengthMeasure;
WHERE
WR31 : NOT(EXISTS(LiningDepth) AND NOT(EXISTS(LiningThickness)));
WR32 : NOT(EXISTS(ThresholdDepth) AND NOT(EXISTS(ThresholdThickness)));
WR33 : (EXISTS(TransomOffset) AND EXISTS(TransomThickness)) XOR
(NOT(EXISTS(TransomOffset)) AND NOT(EXISTS(TransomThickness)));
WR34 : (EXISTS(CasingDepth) AND EXISTS(CasingThickness)) XOR
(NOT(EXISTS(CasingDepth)) AND NOT(EXISTS(CasingThickness)));
WR35 : (EXISTS(SELF\IfcPropertySetDefinition.DefinesType[1]))
AND
(
('IFC4.IFCDOORTYPE' IN TYPEOF(SELF\IfcPropertySetDefinition.DefinesType[1]))
OR
('IFC4.IFCDOORSTYLE' IN TYPEOF(SELF\IfcPropertySetDefinition.DefinesType[1]))
);
END_ENTITY;
*/
