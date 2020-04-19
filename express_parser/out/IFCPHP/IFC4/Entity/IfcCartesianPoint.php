<?php

namespace IFCPHP\IFC4\Entity;
use IFCPHP\IFC4 as IFC;

class IfcCartesianPoint extends IfcPoint{

	static public $elementName = 'IFCCARTESIANPOINT';

	static public $translationFR = 'Point cartésien';

	static public $params = [
		[
			'name' => 'Coordinates',
			'class' => 'Type\IfcLengthMeasure',
			'type' => 'array',
			'optional' => false,
			'min' => 1,
			'max' => 3,
		],
	];
}
/* DEFINITION
ENTITY IfcCartesianPoint
SUBTYPE OF (IfcPoint);
Coordinates : LIST [1:3] OF IfcLengthMeasure;
DERIVE
Dim : IfcDimensionCount := HIINDEX(Coordinates);
WHERE
CP2Dor3D : HIINDEX(Coordinates) >= 2;
END_ENTITY;
*/
