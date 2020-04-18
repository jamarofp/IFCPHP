<?php

namespace IFCPHP\IFC4\Entity;
use IFCPHP\IFC4 as IFC;

class IfcFillAreaStyleHatching extends IfcGeometricRepresentationItem{

	static public $params = [
		[
			'name' => 'HatchLineAppearance',
			'class' => 'Entity\IfcCurveStyle',
			'type' => 'object',
			'optional' => false,
		],
		[
			'name' => 'StartOfNextHatchLine',
			'class' => 'Type\IfcHatchLineDistanceSelect',
			'type' => 'object',
			'optional' => false,
		],
		[
			'name' => 'PointOfReferenceHatchLine',
			'class' => 'Entity\IfcCartesianPoint',
			'type' => 'object',
			'optional' => true,
		],
		[
			'name' => 'PatternStart',
			'class' => 'Entity\IfcCartesianPoint',
			'type' => 'object',
			'optional' => true,
		],
		[
			'name' => 'HatchLineAngle',
			'class' => 'Type\IfcPlaneAngleMeasure',
			'type' => 'object',
			'optional' => false,
		],
	];
}
/* DEFINITION
ENTITY IfcFillAreaStyleHatching
SUBTYPE OF (IfcGeometricRepresentationItem);
HatchLineAppearance : IfcCurveStyle;
StartOfNextHatchLine : IfcHatchLineDistanceSelect;
PointOfReferenceHatchLine : OPTIONAL IfcCartesianPoint;
PatternStart : OPTIONAL IfcCartesianPoint;
HatchLineAngle : IfcPlaneAngleMeasure;
WHERE
PatternStart2D : NOT(EXISTS(PatternStart)) OR (PatternStart.Dim = 2);
RefHatchLine2D : NOT(EXISTS(PointOfReferenceHatchLine)) OR (PointOfReferenceHatchLine.Dim = 2);
END_ENTITY;
*/
