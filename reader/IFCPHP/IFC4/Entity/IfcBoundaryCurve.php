<?php

namespace IFCPHP\IFC4\Entity;
use IFCPHP\IFC4 as IFC;

class IfcBoundaryCurve extends IfcCompositeCurveOnSurface{

	static public $translationFR = 'Courbe limite';

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
	IfcOuterBoundaryCurve
*/


/* DEFINITION
ENTITY IfcBoundaryCurve
SUPERTYPE OF (ONEOF
(IfcOuterBoundaryCurve))
SUBTYPE OF (IfcCompositeCurveOnSurface);
WHERE
IsClosed : SELF\IfcCompositeCurve.ClosedCurve;
END_ENTITY;
*/
