<?php

namespace IFCPHP\IFC4\Entity;
use IFCPHP\IFC4 as IFC;

class IfcConnectionCurveGeometry extends IfcConnectionGeometry{

	static public $params = [
		[
			'name' => 'CurveOnRelatingElement',
			'class' => 'Type\IfcCurveOrEdgeCurve',
			'type' => 'object',
			'optional' => false,
		],
		[
			'name' => 'CurveOnRelatedElement',
			'class' => 'Type\IfcCurveOrEdgeCurve',
			'type' => 'object',
			'optional' => true,
		],
	];
}
/* DEFINITION
ENTITY IfcConnectionCurveGeometry
SUBTYPE OF (IfcConnectionGeometry);
CurveOnRelatingElement : IfcCurveOrEdgeCurve;
CurveOnRelatedElement : OPTIONAL IfcCurveOrEdgeCurve;
END_ENTITY;
*/
