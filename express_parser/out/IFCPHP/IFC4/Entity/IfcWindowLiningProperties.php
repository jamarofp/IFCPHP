<?php

namespace IFCPHP\IFC4\Entity;
use IFCPHP\IFC4 as IFC;

class IfcWindowLiningProperties extends IfcPreDefinedPropertySet{

	static public $elementName = 'IFCWINDOWLININGPROPERTIES';

	static public $translationFR = 'Propriétés de cadre de fenêtre';

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
			'name' => 'TransomThickness',
			'class' => 'Type\IfcNonNegativeLengthMeasure',
			'type' => 'object',
			'optional' => true,
		],
		[
			'name' => 'MullionThickness',
			'class' => 'Type\IfcNonNegativeLengthMeasure',
			'type' => 'object',
			'optional' => true,
		],
		[
			'name' => 'FirstTransomOffset',
			'class' => 'Type\IfcNormalisedRatioMeasure',
			'type' => 'object',
			'optional' => true,
		],
		[
			'name' => 'SecondTransomOffset',
			'class' => 'Type\IfcNormalisedRatioMeasure',
			'type' => 'object',
			'optional' => true,
		],
		[
			'name' => 'FirstMullionOffset',
			'class' => 'Type\IfcNormalisedRatioMeasure',
			'type' => 'object',
			'optional' => true,
		],
		[
			'name' => 'SecondMullionOffset',
			'class' => 'Type\IfcNormalisedRatioMeasure',
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
			'name' => 'LiningOffset',
			'class' => 'Type\IfcLengthMeasure',
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
ENTITY IfcWindowLiningProperties
SUBTYPE OF (IfcPreDefinedPropertySet);
LiningDepth : OPTIONAL IfcPositiveLengthMeasure;
LiningThickness : OPTIONAL IfcNonNegativeLengthMeasure;
TransomThickness : OPTIONAL IfcNonNegativeLengthMeasure;
MullionThickness : OPTIONAL IfcNonNegativeLengthMeasure;
FirstTransomOffset : OPTIONAL IfcNormalisedRatioMeasure;
SecondTransomOffset : OPTIONAL IfcNormalisedRatioMeasure;
FirstMullionOffset : OPTIONAL IfcNormalisedRatioMeasure;
SecondMullionOffset : OPTIONAL IfcNormalisedRatioMeasure;
ShapeAspectStyle : OPTIONAL IfcShapeAspect;
LiningOffset : OPTIONAL IfcLengthMeasure;
LiningToPanelOffsetX : OPTIONAL IfcLengthMeasure;
LiningToPanelOffsetY : OPTIONAL IfcLengthMeasure;
WHERE
WR31 : NOT(EXISTS(LiningDepth) AND NOT(EXISTS(LiningThickness)));
WR32 : NOT(NOT(EXISTS(FirstTransomOffset)) AND EXISTS(SecondTransomOffset));
WR33 : NOT(NOT(EXISTS(FirstMullionOffset)) AND EXISTS(SecondMullionOffset));
WR34 : (EXISTS(SELF\IfcPropertySetDefinition.DefinesType[1]))
AND
(
('IFC4.IFCWINDOWTYPE' IN TYPEOF(SELF\IfcPropertySetDefinition.DefinesType[1]))
OR
('IFC4.IFCWINDOWSTYLE' IN TYPEOF(SELF\IfcPropertySetDefinition.DefinesType[1]))
);
END_ENTITY;
*/
