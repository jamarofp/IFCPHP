<?php

namespace IFCPHP\IFC4\Entity;
use IFCPHP\IFC4 as IFC;

class IfcRevolvedAreaSolid extends IfcSweptAreaSolid{

	static public $translationFR = 'Solide de révolution surfacique';

	static public $params = [
		[
			'name' => 'SweptArea',
			'class' => 'Entity\IfcProfileDef',
			'type' => 'object',
			'optional' => false,
		],
		[
			'name' => 'Position',
			'class' => 'Entity\IfcAxis2Placement3D',
			'type' => 'object',
			'optional' => true,
		],
		[
			'name' => 'Axis',
			'class' => 'Entity\IfcAxis1Placement',
			'type' => 'object',
			'optional' => false,
		],
		[
			'name' => 'Angle',
			'class' => 'Type\IfcPlaneAngleMeasure',
			'type' => 'object',
			'optional' => false,
		],
	];
}
/* SUPERTYPE
	IfcRevolvedAreaSolidTapered
*/


/* DEFINITION
ENTITY IfcRevolvedAreaSolid
SUPERTYPE OF (ONEOF
(IfcRevolvedAreaSolidTapered))
SUBTYPE OF (IfcSweptAreaSolid);
Axis : IfcAxis1Placement;
Angle : IfcPlaneAngleMeasure;
DERIVE
AxisLine : IfcLine := IfcRepresentationItem() || IfcGeometricRepresentationItem () || IfcCurve() || IfcLine(Axis.Location,
IfcRepresentationItem() || IfcGeometricRepresentationItem () || IfcVector(Axis.Z,1.0));
WHERE
AxisStartInXY : Axis.Location.Coordinates[3] = 0.0;
AxisDirectionInXY : Axis.Z.DirectionRatios[3] = 0.0;
END_ENTITY;
*/
