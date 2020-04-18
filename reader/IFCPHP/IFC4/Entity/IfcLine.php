<?php

namespace IFCPHP\IFC4\Entity;
use IFCPHP\IFC4 as IFC;

class IfcLine extends IfcCurve{

	static public $translationFR = 'Ligne';

	static public $params = [
		[
			'name' => 'Pnt',
			'class' => 'Entity\IfcCartesianPoint',
			'type' => 'object',
			'optional' => false,
		],
		[
			'name' => 'Dir',
			'class' => 'Entity\IfcVector',
			'type' => 'object',
			'optional' => false,
		],
	];
}
/* DEFINITION
ENTITY IfcLine
SUBTYPE OF (IfcCurve);
Pnt : IfcCartesianPoint;
Dir : IfcVector;
WHERE
SameDim : Dir.Dim = Pnt.Dim;
END_ENTITY;
*/
