<?php

namespace IFCPHP\IFC4\Entity;
use IFCPHP\IFC4 as IFC;

class IfcGeometricSet extends IfcGeometricRepresentationItem{

	static public $elementName = 'IFCGEOMETRICSET';

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
/* SUPERTYPE
	IfcGeometricCurveSet
*/


/* DEFINITION
ENTITY IfcGeometricSet
SUPERTYPE OF (ONEOF
(IfcGeometricCurveSet))
SUBTYPE OF (IfcGeometricRepresentationItem);
Elements : SET [1:?] OF IfcGeometricSetSelect;
DERIVE
Dim : IfcDimensionCount := Elements[1].Dim;
WHERE
ConsistentDim : SIZEOF(QUERY(Temp <* Elements |
Temp.Dim <> Elements[1].Dim))
= 0;
END_ENTITY;
*/
