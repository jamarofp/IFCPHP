<?php

namespace IFCPHP\IFC4\Entity;
use IFCPHP\IFC4 as IFC;

class IfcPcurve extends IfcCurve{

	static public $translationFR = 'Courbe basée sur une surface';

	static public $params = [
		[
			'name' => 'BasisSurface',
			'class' => 'Entity\IfcSurface',
			'type' => 'object',
			'optional' => false,
		],
		[
			'name' => 'ReferenceCurve',
			'class' => 'Entity\IfcCurve',
			'type' => 'object',
			'optional' => false,
		],
	];
}
/* DEFINITION
ENTITY IfcPcurve
SUBTYPE OF (IfcCurve);
BasisSurface : IfcSurface;
ReferenceCurve : IfcCurve;
WHERE
DimIs2D : ReferenceCurve.Dim = 2;
END_ENTITY;
*/
