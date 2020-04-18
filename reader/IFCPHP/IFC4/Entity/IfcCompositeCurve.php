<?php

namespace IFCPHP\IFC4\Entity;
use IFCPHP\IFC4 as IFC;

class IfcCompositeCurve extends IfcBoundedCurve{

	static public $translationFR = 'Courbe composite';

	static public $params = [
		[
			'name' => 'Segments',
			'class' => 'Entity\IfcCompositeCurveSegment',
			'type' => 'array',
			'optional' => false,
			'min' => 1,
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
	IfcCompositeCurveOnSurface
*/


/* DEFINITION
ENTITY IfcCompositeCurve
SUPERTYPE OF (ONEOF
(IfcCompositeCurveOnSurface))
SUBTYPE OF (IfcBoundedCurve);
Segments : LIST [1:?] OF IfcCompositeCurveSegment;
SelfIntersect : LOGICAL;
DERIVE
NSegments : INTEGER := SIZEOF(Segments);
ClosedCurve : LOGICAL := Segments[NSegments].Transition <> Discontinuous;
WHERE
CurveContinuous : ((NOT ClosedCurve) AND (SIZEOF(QUERY(Temp <* Segments | Temp.Transition = Discontinuous)) = 1)) OR ((ClosedCurve) AND (SIZEOF(QUERY(Temp <* Segments | Temp.Transition = Discontinuous)) = 0));
SameDim : SIZEOF( QUERY( Temp <* Segments | Temp.Dim <> Segments[1].Dim)) = 0;
END_ENTITY;
*/
