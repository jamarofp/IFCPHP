<?php

namespace IFCPHP\IFC4\Entity;
use IFCPHP\IFC4 as IFC;

class IfcBSplineSurfaceWithKnots extends IfcBSplineSurface{

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
		[
			'name' => 'UMultiplicities',
			'class' => 'Base\Integer',
			'type' => 'array',
			'optional' => false,
			'min' => 2,
		],
		[
			'name' => 'VMultiplicities',
			'class' => 'Base\Integer',
			'type' => 'array',
			'optional' => false,
			'min' => 2,
		],
		[
			'name' => 'UKnots',
			'class' => 'Type\IfcParameterValue',
			'type' => 'array',
			'optional' => false,
			'min' => 2,
		],
		[
			'name' => 'VKnots',
			'class' => 'Type\IfcParameterValue',
			'type' => 'array',
			'optional' => false,
			'min' => 2,
		],
		[
			'name' => 'KnotSpec',
			'class' => 'Type\IfcKnotType',
			'type' => 'object',
			'optional' => false,
		],
	];
}
/* SUPERTYPE
	IfcRationalBSplineSurfaceWithKnots
*/


/* DEFINITION
ENTITY IfcBSplineSurfaceWithKnots
SUPERTYPE OF (ONEOF
(IfcRationalBSplineSurfaceWithKnots))
SUBTYPE OF (IfcBSplineSurface);
UMultiplicities : LIST [2:?] OF INTEGER;
VMultiplicities : LIST [2:?] OF INTEGER;
UKnots : LIST [2:?] OF IfcParameterValue;
VKnots : LIST [2:?] OF IfcParameterValue;
KnotSpec : IfcKnotType;
DERIVE
KnotVUpper : INTEGER := SIZEOF(VKnots);
KnotUUpper : INTEGER := SIZEOF(UKnots);
WHERE
UDirectionConstraints : IfcConstraintsParamBSpline (
SELF\IfcBSplineSurface.UDegree, KnotUUpper,
SELF\IfcBSplineSurface.UUpper, UMultiplicities, UKnots);
VDirectionConstraints : IfcConstraintsParamBSpline (
SELF\IfcBSplineSurface.VDegree, KnotVUpper,
SELF\IfcBSplineSurface.VUpper, VMultiplicities, VKnots);
CorrespondingULists : SIZEOF(UMultiplicities) = KnotUUpper;
CorrespondingVLists : SIZEOF(VMultiplicities) = KnotVUpper;
END_ENTITY;
*/
