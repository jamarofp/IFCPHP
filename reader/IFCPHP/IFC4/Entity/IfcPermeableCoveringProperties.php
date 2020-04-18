<?php

namespace IFCPHP\IFC4\Entity;
use IFCPHP\IFC4 as IFC;

class IfcPermeableCoveringProperties extends IfcPreDefinedPropertySet{

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
			'class' => 'Type\IfcPermeableCoveringOperationEnum',
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
ENTITY IfcPermeableCoveringProperties
SUBTYPE OF (IfcPreDefinedPropertySet);
OperationType : IfcPermeableCoveringOperationEnum;
PanelPosition : IfcWindowPanelPositionEnum;
FrameDepth : OPTIONAL IfcPositiveLengthMeasure;
FrameThickness : OPTIONAL IfcPositiveLengthMeasure;
ShapeAspectStyle : OPTIONAL IfcShapeAspect;
END_ENTITY;
*/
