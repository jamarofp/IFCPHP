<?php

namespace IFCPHP\IFC4\Entity;
use IFCPHP\IFC4 as IFC;

class IfcOuterBoundaryCurve extends IfcBoundaryCurve{

	static public $elementName = 'IFCOUTERBOUNDARYCURVE';

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
/* DEFINITION
ENTITY IfcOuterBoundaryCurve
SUBTYPE OF (IfcBoundaryCurve);
END_ENTITY;
*/
