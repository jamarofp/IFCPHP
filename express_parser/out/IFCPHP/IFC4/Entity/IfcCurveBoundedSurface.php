<?php

namespace IFCPHP\IFC4\Entity;
use IFCPHP\IFC4 as IFC;

class IfcCurveBoundedSurface extends IfcBoundedSurface{

	static public $elementName = 'IFCCURVEBOUNDEDSURFACE';

	static public $params = [
		[
			'name' => 'BasisSurface',
			'class' => 'Entity\IfcSurface',
			'type' => 'object',
			'optional' => false,
		],
		[
			'name' => 'Boundaries',
			'class' => 'Entity\IfcBoundaryCurve',
			'type' => 'array',
			'optional' => false,
			'min' => 1,
		],
		[
			'name' => 'ImplicitOuter',
			'class' => 'Base\Boolean',
			'type' => 'object',
			'optional' => false,
		],
	];
}
/* DEFINITION
ENTITY IfcCurveBoundedSurface
SUBTYPE OF (IfcBoundedSurface);
BasisSurface : IfcSurface;
Boundaries : SET [1:?] OF IfcBoundaryCurve;
ImplicitOuter : BOOLEAN;
END_ENTITY;
*/
