<?php

namespace IFCPHP\IFC4\Entity;
use IFCPHP\IFC4 as IFC;

class IfcSurfaceOfRevolution extends IfcSweptSurface{

	static public $elementName = 'IFCSURFACEOFREVOLUTION';

	static public $translationFR = 'Surface de révolution';

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
			'name' => 'AxisPosition',
			'class' => 'Entity\IfcAxis1Placement',
			'type' => 'object',
			'optional' => false,
		],
	];
}
/* DEFINITION
ENTITY IfcSurfaceOfRevolution
SUBTYPE OF (IfcSweptSurface);
AxisPosition : IfcAxis1Placement;
DERIVE
AxisLine : IfcLine := IfcRepresentationItem() || IfcGeometricRepresentationItem () || IfcCurve() || IfcLine(AxisPosition.Location,
IfcRepresentationItem() || IfcGeometricRepresentationItem () || IfcVector(AxisPosition.Z,1.0));
END_ENTITY;
*/
