<?php

namespace IFCPHP\IFC4\Entity;
use IFCPHP\IFC4 as IFC;

class IfcCompositeCurveOnSurface extends IfcCompositeCurve{

	static public $translationFR = 'Courbe composite sur surface';

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
	IfcBoundaryCurve
*/


/* DEFINITION
ENTITY IfcCompositeCurveOnSurface
SUPERTYPE OF (ONEOF
(IfcBoundaryCurve))
SUBTYPE OF (IfcCompositeCurve);
DERIVE
BasisSurface : SET [0:1] OF IfcSurface := IfcGetBasisSurface(SELF);
WHERE
SameSurface : SIZEOF(BasisSurface) > 0;
END_ENTITY;
*/
