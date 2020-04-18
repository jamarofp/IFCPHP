<?php

namespace IFCPHP\IFC4\Entity;
use IFCPHP\IFC4 as IFC;

class IfcRationalBSplineSurfaceWithKnots extends IfcBSplineSurfaceWithKnots{

	static public $translationFR = 'Surfaces Bsplines rationnelles avec nœuds';

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
		[
			'name' => 'WeightsData',
			'class' => 'Base\Real',
			'type' => 'array',
			'optional' => false,
			'min' => 2,
		],
	];
}
/* DEFINITION
ENTITY IfcRationalBSplineSurfaceWithKnots
SUBTYPE OF (IfcBSplineSurfaceWithKnots);
WeightsData : LIST [2:?] OF LIST [2:?] OF REAL;
DERIVE
Weights : ARRAY [0:UUpper] OF ARRAY [0:VUpper] OF REAL := IfcMakeArrayOfArray(WeightsData,0,UUpper,0,VUpper);
WHERE
CorrespondingWeightsDataLists : (SIZEOF(WeightsData) = SIZEOF(SELF\IfcBSplineSurface.ControlPointsList))
AND
(SIZEOF(WeightsData[1]) = SIZEOF(SELF\IfcBSplineSurface.ControlPointsList[1]));
WeightValuesGreaterZero : IfcSurfaceWeightsPositive(SELF);
END_ENTITY;
*/
