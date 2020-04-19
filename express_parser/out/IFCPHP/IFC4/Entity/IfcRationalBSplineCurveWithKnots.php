<?php

namespace IFCPHP\IFC4\Entity;
use IFCPHP\IFC4 as IFC;

class IfcRationalBSplineCurveWithKnots extends IfcBSplineCurveWithKnots{

	static public $elementName = 'IFCRATIONALBSPLINECURVEWITHKNOTS';

	static public $translationFR = 'Courbes Bsplines rationnelles avec nœuds';

	static public $params = [
		[
			'name' => 'Degree',
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
			'name' => 'CurveForm',
			'class' => 'Type\IfcBSplineCurveForm',
			'type' => 'object',
			'optional' => false,
		],
		[
			'name' => 'ClosedCurve',
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
			'name' => 'KnotMultiplicities',
			'class' => 'Base\Integer',
			'type' => 'array',
			'optional' => false,
			'min' => 2,
		],
		[
			'name' => 'Knots',
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
ENTITY IfcRationalBSplineCurveWithKnots
SUBTYPE OF (IfcBSplineCurveWithKnots);
WeightsData : LIST [2:?] OF REAL;
DERIVE
Weights : ARRAY [0:UpperIndexOnControlPoints] OF REAL := IfcListToArray(WeightsData,0,SELF\IfcBSplineCurve.UpperIndexOnControlPoints);
WHERE
SameNumOfWeightsAndPoints : SIZEOF(WeightsData) = SIZEOF(SELF\IfcBSplineCurve.ControlPointsList);
WeightsGreaterZero : IfcCurveWeightsPositive(SELF);
END_ENTITY;
*/
