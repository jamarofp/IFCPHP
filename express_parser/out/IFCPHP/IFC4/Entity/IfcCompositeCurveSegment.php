<?php

namespace IFCPHP\IFC4\Entity;
use IFCPHP\IFC4 as IFC;

class IfcCompositeCurveSegment extends IfcGeometricRepresentationItem{

	static public $elementName = 'IFCCOMPOSITECURVESEGMENT';

	static public $translationFR = 'Segment de courbe composite';

	static public $params = [
		[
			'name' => 'Transition',
			'class' => 'Type\IfcTransitionCode',
			'type' => 'object',
			'optional' => false,
		],
		[
			'name' => 'SameSense',
			'class' => 'Base\Boolean',
			'type' => 'object',
			'optional' => false,
		],
		[
			'name' => 'ParentCurve',
			'class' => 'Entity\IfcCurve',
			'type' => 'object',
			'optional' => false,
		],
	];
}
/* SUPERTYPE
	IfcReparametrisedCompositeCurveSegment
*/


/* DEFINITION
ENTITY IfcCompositeCurveSegment
SUPERTYPE OF (ONEOF
(IfcReparametrisedCompositeCurveSegment))
SUBTYPE OF (IfcGeometricRepresentationItem);
Transition : IfcTransitionCode;
SameSense : BOOLEAN;
ParentCurve : IfcCurve;
DERIVE
Dim : IfcDimensionCount := ParentCurve.Dim;
INVERSE
UsingCurves : SET [1:?] OF IfcCompositeCurve FOR Segments;
WHERE
ParentIsBoundedCurve : ('IFC4.IFCBOUNDEDCURVE' IN TYPEOF(ParentCurve));
END_ENTITY;
*/
