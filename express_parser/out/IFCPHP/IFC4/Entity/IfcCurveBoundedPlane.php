<?php

namespace IFCPHP\IFC4\Entity;
use IFCPHP\IFC4 as IFC;

class IfcCurveBoundedPlane extends IfcBoundedSurface{

	static public $elementName = 'IFCCURVEBOUNDEDPLANE';

	static public $params = [
		[
			'name' => 'BasisSurface',
			'class' => 'Entity\IfcPlane',
			'type' => 'object',
			'optional' => false,
		],
		[
			'name' => 'OuterBoundary',
			'class' => 'Entity\IfcCurve',
			'type' => 'object',
			'optional' => false,
		],
		[
			'name' => 'InnerBoundaries',
			'class' => 'Entity\IfcCurve',
			'type' => 'array',
			'optional' => false,
			'min' => 0,
		],
	];
}
/* DEFINITION
ENTITY IfcCurveBoundedPlane
SUBTYPE OF (IfcBoundedSurface);
BasisSurface : IfcPlane;
OuterBoundary : IfcCurve;
InnerBoundaries : SET [0:?] OF IfcCurve;
END_ENTITY;
*/
