<?php

namespace IFCPHP\IFC4\Entity;
use IFCPHP\IFC4 as IFC;

class IfcPolygonalBoundedHalfSpace extends IfcHalfSpaceSolid{

	static public $elementName = 'IFCPOLYGONALBOUNDEDHALFSPACE';

	static public $params = [
		[
			'name' => 'BaseSurface',
			'class' => 'Entity\IfcSurface',
			'type' => 'object',
			'optional' => false,
		],
		[
			'name' => 'AgreementFlag',
			'class' => 'Base\Boolean',
			'type' => 'object',
			'optional' => false,
		],
		[
			'name' => 'Position',
			'class' => 'Entity\IfcAxis2Placement3D',
			'type' => 'object',
			'optional' => false,
		],
		[
			'name' => 'PolygonalBoundary',
			'class' => 'Entity\IfcBoundedCurve',
			'type' => 'object',
			'optional' => false,
		],
	];
}
/* DEFINITION
ENTITY IfcPolygonalBoundedHalfSpace
SUBTYPE OF (IfcHalfSpaceSolid);
Position : IfcAxis2Placement3D;
PolygonalBoundary : IfcBoundedCurve;
WHERE
BoundaryDim : PolygonalBoundary.Dim = 2;
BoundaryType : SIZEOF(TYPEOF(PolygonalBoundary) * [
'IFC4.IFCPOLYLINE',
'IFC4.IFCCOMPOSITECURVE']
) = 1;
END_ENTITY;
*/
