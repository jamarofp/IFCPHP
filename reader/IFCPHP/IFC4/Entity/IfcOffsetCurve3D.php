<?php

namespace IFCPHP\IFC4\Entity;
use IFCPHP\IFC4 as IFC;

class IfcOffsetCurve3D extends IfcCurve{

	static public $translationFR = 'Décalage de courbe 3d';

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
		[
			'name' => 'RefDirection',
			'class' => 'Entity\IfcDirection',
			'type' => 'object',
			'optional' => false,
		],
	];
}
/* DEFINITION
ENTITY IfcOffsetCurve3D
SUBTYPE OF (IfcCurve);
BasisCurve : IfcCurve;
Distance : IfcLengthMeasure;
SelfIntersect : LOGICAL;
RefDirection : IfcDirection;
WHERE
DimIs2D : BasisCurve.Dim = 3;
END_ENTITY;
*/
