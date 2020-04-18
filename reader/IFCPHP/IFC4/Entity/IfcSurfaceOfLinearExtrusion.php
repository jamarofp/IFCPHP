<?php

namespace IFCPHP\IFC4\Entity;
use IFCPHP\IFC4 as IFC;

class IfcSurfaceOfLinearExtrusion extends IfcSweptSurface{

	static public $translationFR = 'Extrusion linéaire ou surfacique';

	static public $params = [
		[
			'name' => 'SweptCurve',
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
			'name' => 'ExtrudedDirection',
			'class' => 'Entity\IfcDirection',
			'type' => 'object',
			'optional' => false,
		],
		[
			'name' => 'Depth',
			'class' => 'Type\IfcLengthMeasure',
			'type' => 'object',
			'optional' => false,
		],
	];
}
/* DEFINITION
ENTITY IfcSurfaceOfLinearExtrusion
SUBTYPE OF (IfcSweptSurface);
ExtrudedDirection : IfcDirection;
Depth : IfcLengthMeasure;
DERIVE
ExtrusionAxis : IfcVector := IfcRepresentationItem() || IfcGeometricRepresentationItem () || IfcVector (ExtrudedDirection, Depth);
WHERE
DepthGreaterZero : Depth > 0.;
END_ENTITY;
*/
