<?php

namespace IFCPHP\IFC4\Entity;
use IFCPHP\IFC4 as IFC;

class IfcGeometricCurveSet extends IfcGeometricSet{

	static public $params = [
		[
			'name' => 'Elements',
			'class' => 'Type\IfcGeometricSetSelect',
			'type' => 'array',
			'optional' => false,
			'min' => 1,
		],
	];
}
/* DEFINITION
ENTITY IfcGeometricCurveSet
SUBTYPE OF (IfcGeometricSet);
WHERE
NoSurfaces : SIZEOF(QUERY(Temp <* SELF\IfcGeometricSet.Elements |
'IFC4.IFCSURFACE' IN TYPEOF(Temp))) = 0;
END_ENTITY;
*/
