<?php

namespace IFCPHP\IFC4\Entity;
use IFCPHP\IFC4 as IFC;

class IfcSurfaceReinforcementArea extends IfcStructuralLoadOrResult{

	static public $params = [
		[
			'name' => 'Name',
			'class' => 'Type\IfcLabel',
			'type' => 'object',
			'optional' => true,
		],
		[
			'name' => 'SurfaceReinforcement1',
			'class' => 'Type\IfcLengthMeasure',
			'type' => 'array',
			'optional' => true,
			'min' => 2,
			'max' => 3,
		],
		[
			'name' => 'SurfaceReinforcement2',
			'class' => 'Type\IfcLengthMeasure',
			'type' => 'array',
			'optional' => true,
			'min' => 2,
			'max' => 3,
		],
		[
			'name' => 'ShearReinforcement',
			'class' => 'Type\IfcRatioMeasure',
			'type' => 'object',
			'optional' => true,
		],
	];
}
/* DEFINITION
ENTITY IfcSurfaceReinforcementArea
SUBTYPE OF (IfcStructuralLoadOrResult);
SurfaceReinforcement1 : OPTIONAL LIST [2:3] OF IfcLengthMeasure;
SurfaceReinforcement2 : OPTIONAL LIST [2:3] OF IfcLengthMeasure;
ShearReinforcement : OPTIONAL IfcRatioMeasure;
WHERE
SurfaceAndOrShearAreaSpecified : EXISTS(SurfaceReinforcement1) OR EXISTS(SurfaceReinforcement2) OR EXISTS(ShearReinforcement);
NonnegativeArea1 : (NOT EXISTS(SurfaceReinforcement1)) OR (
(SurfaceReinforcement1[1] >= 0.) AND
(SurfaceReinforcement1[2] >= 0.) AND
((SIZEOF(SurfaceReinforcement1) = 1) OR (SurfaceReinforcement1[1] >= 0.))
);
NonnegativeArea2 : (NOT EXISTS(SurfaceReinforcement2)) OR (
(SurfaceReinforcement2[1] >= 0.) AND
(SurfaceReinforcement2[2] >= 0.) AND
((SIZEOF(SurfaceReinforcement2) = 1) OR (SurfaceReinforcement2[1] >= 0.))
);
NonnegativeArea3 : (NOT EXISTS(ShearReinforcement)) OR (ShearReinforcement >= 0.);
END_ENTITY;
*/
