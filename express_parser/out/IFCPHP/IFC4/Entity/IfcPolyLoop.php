<?php

namespace IFCPHP\IFC4\Entity;
use IFCPHP\IFC4 as IFC;

class IfcPolyLoop extends IfcLoop{

	static public $elementName = 'IFCPOLYLOOP';

	static public $params = [
		[
			'name' => 'Polygon',
			'class' => 'Entity\IfcCartesianPoint',
			'type' => 'array',
			'optional' => false,
			'min' => 3,
		],
	];
}
/* DEFINITION
ENTITY IfcPolyLoop
SUBTYPE OF (IfcLoop);
Polygon : LIST [3:?] OF UNIQUE IfcCartesianPoint;
WHERE
AllPointsSameDim : SIZEOF(QUERY(Temp <* Polygon | Temp.Dim <> Polygon[1].Dim)) = 0;
END_ENTITY;
*/
