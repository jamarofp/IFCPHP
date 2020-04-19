<?php

namespace IFCPHP\IFC4\Entity;
use IFCPHP\IFC4 as IFC;

class IfcBSplineSurface extends IfcBoundedSurface{

	static public $elementName = 'IFCBSPLINESURFACE';

	static public $translationFR = 'Surface Bspline';

	static public $params = [
		[
			'name' => 'UDegree',
			'class' => 'Base\Integer',
			'type' => 'object',
			'optional' => false,
		],
		[
			'name' => 'VDegree',
			'class' => 'Base\Integer',
			'type' => 'object',
			'optional' => false,
		],
		[
			'name' => 'ControlPointsList',
			'class' => 'Entity\IfcCartesianPoint',
			'type' => 'array',
			'optional' => false,
			'min' => 2,
		],
		[
			'name' => 'SurfaceForm',
			'class' => 'Type\IfcBSplineSurfaceForm',
			'type' => 'object',
			'optional' => false,
		],
		[
			'name' => 'UClosed',
			'class' => 'Base\Logical',
			'type' => 'object',
			'optional' => false,
		],
		[
			'name' => 'VClosed',
			'class' => 'Base\Logical',
			'type' => 'object',
			'optional' => false,
		],
		[
			'name' => 'SelfIntersect',
			'class' => 'Base\Logical',
			'type' => 'object',
			'optional' => false,
		],
	];
}
/* SUPERTYPE
	IfcBSplineSurfaceWithKnots
*/


/* DEFINITION
ENTITY IfcBSplineSurface
ABSTRACT SUPERTYPE OF (ONEOF
(IfcBSplineSurfaceWithKnots))
SUBTYPE OF (IfcBoundedSurface);
UDegree : INTEGER;
VDegree : INTEGER;
ControlPointsList : LIST [2:?] OF LIST [2:?] OF IfcCartesianPoint;
SurfaceForm : IfcBSplineSurfaceForm;
UClosed : LOGICAL;
VClosed : LOGICAL;
SelfIntersect : LOGICAL;
DERIVE
UUpper : INTEGER := SIZEOF(ControlPointsList) - 1;
VUpper : INTEGER := SIZEOF(ControlPointsList[1]) - 1;
ControlPoints : ARRAY [0:UUpper] OF ARRAY [0:VUpper] OF IfcCartesianPoint := IfcMakeArrayOfArray(ControlPointsList,
0,UUpper,0,VUpper);
END_ENTITY;
*/
