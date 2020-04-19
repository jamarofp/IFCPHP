<?php

namespace IFCPHP\IFC4\Entity;
use IFCPHP\IFC4 as IFC;

class IfcPointOnCurve extends IfcPoint{

	static public $elementName = 'IFCPOINTONCURVE';

	static public $translationFR = 'Point de courbe';

	static public $params = [
		[
			'name' => 'BasisCurve',
			'class' => 'Entity\IfcCurve',
			'type' => 'object',
			'optional' => false,
		],
		[
			'name' => 'PointParameter',
			'class' => 'Type\IfcParameterValue',
			'type' => 'object',
			'optional' => false,
		],
	];
}
/* DEFINITION
ENTITY IfcPointOnCurve
SUBTYPE OF (IfcPoint);
BasisCurve : IfcCurve;
PointParameter : IfcParameterValue;
DERIVE
Dim : IfcDimensionCount := BasisCurve.Dim;
END_ENTITY;
*/
