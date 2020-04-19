<?php

namespace IFCPHP\IFC4\Entity;
use IFCPHP\IFC4 as IFC;

class IfcWindowPanelProperties extends IfcPreDefinedPropertySet{

	static public $elementName = 'IFCWINDOWPANELPROPERTIES';

	static public $translationFR = 'Propriétés des panneaux de fenêtre';

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
			'name' => 'OperationType',
			'class' => 'Type\IfcWindowPanelOperationEnum',
			'type' => 'object',
			'optional' => false,
		],
		[
			'name' => 'PanelPosition',
			'class' => 'Type\IfcWindowPanelPositionEnum',
			'type' => 'object',
			'optional' => false,
		],
		[
			'name' => 'FrameDepth',
			'class' => 'Type\IfcPositiveLengthMeasure',
			'type' => 'object',
			'optional' => true,
		],
		[
			'name' => 'FrameThickness',
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
	];
}
/* DEFINITION
ENTITY IfcWindowPanelProperties
SUBTYPE OF (IfcPreDefinedPropertySet);
OperationType : IfcWindowPanelOperationEnum;
PanelPosition : IfcWindowPanelPositionEnum;
FrameDepth : OPTIONAL IfcPositiveLengthMeasure;
FrameThickness : OPTIONAL IfcPositiveLengthMeasure;
ShapeAspectStyle : OPTIONAL IfcShapeAspect;
WHERE
ApplicableToType : (EXISTS(SELF\IfcPropertySetDefinition.DefinesType[1]))
AND
(
('IFC4.IFCWINDOWTYPE' IN TYPEOF(SELF\IfcPropertySetDefinition.DefinesType[1]))
OR
('IFC4.IFCWINDOWSTYLE' IN TYPEOF(SELF\IfcPropertySetDefinition.DefinesType[1]))
);
END_ENTITY;
*/
