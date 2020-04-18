<?php

namespace IFCPHP\IFC4\Entity;
use IFCPHP\IFC4 as IFC;

class IfcBSplineCurveWithKnots extends IfcBSplineCurve{

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
	];
}
/* SUPERTYPE
	IfcRationalBSplineCurveWithKnots
*/


/* DEFINITION
ENTITY IfcBSplineCurveWithKnots
SUPERTYPE OF (ONEOF
(IfcRationalBSplineCurveWithKnots))
SUBTYPE OF (IfcBSplineCurve);
KnotMultiplicities : LIST [2:?] OF INTEGER;
Knots : LIST [2:?] OF IfcParameterValue;
KnotSpec : IfcKnotType;
DERIVE
UpperIndexOnKnots : INTEGER := SIZEOF(Knots);
WHERE
ConsistentBSpline : IfcConstraintsParamBSpline(Degree, UpperIndexOnKnots,
UpperIndexOnControlPoints, KnotMultiplicities, Knots);
CorrespondingKnotLists : SIZEOF(KnotMultiplicities) = UpperIndexOnKnots;
END_ENTITY;
*/
