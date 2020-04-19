<?php

namespace IFCPHP\IFC4\Entity;
use IFCPHP\IFC4 as IFC;

class IfcBSplineCurve extends IfcBoundedCurve{

	static public $elementName = 'IFCBSPLINECURVE';

	static public $translationFR = 'Courbe Bspline';

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
	];
}
/* SUPERTYPE
	IfcBSplineCurveWithKnots
*/


/* DEFINITION
ENTITY IfcBSplineCurve
ABSTRACT SUPERTYPE OF (ONEOF
(IfcBSplineCurveWithKnots))
SUBTYPE OF (IfcBoundedCurve);
Degree : INTEGER;
ControlPointsList : LIST [2:?] OF IfcCartesianPoint;
CurveForm : IfcBSplineCurveForm;
ClosedCurve : LOGICAL;
SelfIntersect : LOGICAL;
DERIVE
UpperIndexOnControlPoints : INTEGER := (SIZEOF(ControlPointsList) - 1);
ControlPoints : ARRAY [0:UpperIndexOnControlPoints] OF IfcCartesianPoint := IfcListToArray(ControlPointsList,0,UpperIndexOnControlPoints);
WHERE
SameDim : SIZEOF(QUERY(Temp <* ControlPointsList |
Temp.Dim <> ControlPointsList[1].Dim))
= 0;
END_ENTITY;
*/
