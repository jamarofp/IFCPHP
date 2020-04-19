<?php

namespace IFCPHP\IFC4\Entity;
use IFCPHP\IFC4 as IFC;

class IfcVector extends IfcGeometricRepresentationItem{

	static public $elementName = 'IFCVECTOR';

	static public $translationFR = 'Vecteur';

	static public $params = [
		[
			'name' => 'Orientation',
			'class' => 'Entity\IfcDirection',
			'type' => 'object',
			'optional' => false,
		],
		[
			'name' => 'Magnitude',
			'class' => 'Type\IfcLengthMeasure',
			'type' => 'object',
			'optional' => false,
		],
	];
}
/* DEFINITION
ENTITY IfcVector
SUBTYPE OF (IfcGeometricRepresentationItem);
Orientation : IfcDirection;
Magnitude : IfcLengthMeasure;
DERIVE
Dim : IfcDimensionCount := Orientation.Dim;
WHERE
MagGreaterOrEqualZero : Magnitude >= 0.0;
END_ENTITY;
*/
