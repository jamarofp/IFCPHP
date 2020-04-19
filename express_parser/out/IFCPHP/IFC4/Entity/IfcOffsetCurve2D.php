<?php

namespace IFCPHP\IFC4\Entity;
use IFCPHP\IFC4 as IFC;

class IfcOffsetCurve2D extends IfcCurve{

	static public $elementName = 'IFCOFFSETCURVE2D';

	static public $translationFR = 'Décalage de courbe 2d';

	static public $params = [
		[
			'name' => 'BasisCurve',
			'class' => 'Entity\IfcCurve',
			'type' => 'object',
			'optional' => false,
		],
		[
			'name' => 'Distance',
			'class' => 'Type\IfcLengthMeasure',
			'type' => 'object',
			'optional' => false,
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
ENTITY IfcOffsetCurve2D
SUBTYPE OF (IfcCurve);
BasisCurve : IfcCurve;
Distance : IfcLengthMeasure;
SelfIntersect : LOGICAL;
WHERE
DimIs2D : BasisCurve.Dim = 2;
END_ENTITY;
*/
