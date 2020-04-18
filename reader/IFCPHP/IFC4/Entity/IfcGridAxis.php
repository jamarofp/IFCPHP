<?php

namespace IFCPHP\IFC4\Entity;
use IFCPHP\IFC4 as IFC;

class IfcGridAxis extends IFC\Common{

	static public $translationFR = 'Axe de grille';

	static public $params = [
		[
			'name' => 'AxisTag',
			'class' => 'Type\IfcLabel',
			'type' => 'object',
			'optional' => true,
		],
		[
			'name' => 'AxisCurve',
			'class' => 'Entity\IfcCurve',
			'type' => 'object',
			'optional' => false,
		],
		[
			'name' => 'SameSense',
			'class' => 'Type\IfcBoolean',
			'type' => 'object',
			'optional' => false,
		],
	];
}
/* DEFINITION
ENTITY IfcGridAxis;
AxisTag : OPTIONAL IfcLabel;
AxisCurve : IfcCurve;
SameSense : IfcBoolean;
INVERSE
PartOfW : SET [0:1] OF IfcGrid FOR WAxes;
PartOfV : SET [0:1] OF IfcGrid FOR VAxes;
PartOfU : SET [0:1] OF IfcGrid FOR UAxes;
HasIntersections : SET [0:?] OF IfcVirtualGridIntersection FOR IntersectingAxes;
WHERE
WR1 : AxisCurve.Dim = 2;
WR2 : (SIZEOF(PartOfU) = 1) XOR (SIZEOF(PartOfV) = 1) XOR (SIZEOF(PartOfW) = 1);
END_ENTITY;
*/
