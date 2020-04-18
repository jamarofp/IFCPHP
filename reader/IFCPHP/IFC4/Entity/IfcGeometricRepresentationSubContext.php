<?php

namespace IFCPHP\IFC4\Entity;
use IFCPHP\IFC4 as IFC;

class IfcGeometricRepresentationSubContext extends IfcGeometricRepresentationContext{

	static public $params = [
		[
			'name' => 'ContextIdentifier',
			'class' => 'Type\IfcLabel',
			'type' => 'object',
			'optional' => true,
		],
		[
			'name' => 'ContextType',
			'class' => 'Type\IfcLabel',
			'type' => 'object',
			'optional' => true,
		],
		[
			'name' => 'CoordinateSpaceDimension',
			'class' => 'Type\IfcDimensionCount',
			'type' => 'object',
			'optional' => false,
		],
		[
			'name' => 'Precision',
			'class' => 'Base\Real',
			'type' => 'object',
			'optional' => true,
		],
		[
			'name' => 'WorldCoordinateSystem',
			'class' => 'Type\IfcAxis2Placement',
			'type' => 'object',
			'optional' => false,
		],
		[
			'name' => 'TrueNorth',
			'class' => 'Entity\IfcDirection',
			'type' => 'object',
			'optional' => true,
		],
		[
			'name' => 'ParentContext',
			'class' => 'Entity\IfcGeometricRepresentationContext',
			'type' => 'object',
			'optional' => false,
		],
		[
			'name' => 'TargetScale',
			'class' => 'Type\IfcPositiveRatioMeasure',
			'type' => 'object',
			'optional' => true,
		],
		[
			'name' => 'TargetView',
			'class' => 'Type\IfcGeometricProjectionEnum',
			'type' => 'object',
			'optional' => false,
		],
		[
			'name' => 'UserDefinedTargetView',
			'class' => 'Type\IfcLabel',
			'type' => 'object',
			'optional' => true,
		],
	];
}
/* DEFINITION
ENTITY IfcGeometricRepresentationSubContext
SUBTYPE OF (IfcGeometricRepresentationContext);
ParentContext : IfcGeometricRepresentationContext;
TargetScale : OPTIONAL IfcPositiveRatioMeasure;
TargetView : IfcGeometricProjectionEnum;
UserDefinedTargetView : OPTIONAL IfcLabel;
DERIVE
SELF\IfcGeometricRepresentationContext.WorldCoordinateSystem : IfcAxis2Placement := ParentContext.WorldCoordinateSystem;
SELF\IfcGeometricRepresentationContext.CoordinateSpaceDimension : IfcDimensionCount := ParentContext.CoordinateSpaceDimension;
SELF\IfcGeometricRepresentationContext.TrueNorth : IfcDirection := NVL(ParentContext.TrueNorth, IfcConvertDirectionInto2D(SELF\IfcGeometricRepresentationContext.WorldCoordinateSystem.P[2]));
SELF\IfcGeometricRepresentationContext.Precision : REAL := NVL(ParentContext.Precision,1.E-5);
WHERE
WR31 : NOT('IFC4.IFCGEOMETRICREPRESENTATIONSUBCONTEXT' IN TYPEOF(ParentContext));
WR32 : (TargetView <> IfcGeometricProjectionEnum.USERDEFINED) OR
((TargetView =  IfcGeometricProjectionEnum.USERDEFINED) AND
EXISTS(UserDefinedTargetView));
END_ENTITY;
*/
