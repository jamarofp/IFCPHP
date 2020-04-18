<?php

namespace IFCPHP\IFC4\Entity;
use IFCPHP\IFC4 as IFC;

class IfcPolyline extends IfcBoundedCurve{

	static public $translationFR = 'Polyligne';

	static public $params = [
		[
			'name' => 'Points',
			'class' => 'Entity\IfcCartesianPoint',
			'type' => 'array',
			'optional' => false,
			'min' => 2,
		],
	];
}
/* DEFINITION
ENTITY IfcPolyline
SUBTYPE OF (IfcBoundedCurve);
Points : LIST [2:?] OF IfcCartesianPoint;
WHERE
SameDim : SIZEOF(QUERY(Temp <* Points | Temp.Dim <> Points[1].Dim)) = 0;
END_ENTITY;
*/
