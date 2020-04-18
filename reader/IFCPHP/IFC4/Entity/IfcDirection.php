<?php

namespace IFCPHP\IFC4\Entity;
use IFCPHP\IFC4 as IFC;

class IfcDirection extends IfcGeometricRepresentationItem{

	static public $translationFR = 'Direction';

	static public $params = [
		[
			'name' => 'DirectionRatios',
			'class' => 'Base\Real',
			'type' => 'array',
			'optional' => false,
			'min' => 2,
			'max' => 3,
		],
	];
}
/* DEFINITION
ENTITY IfcDirection
SUBTYPE OF (IfcGeometricRepresentationItem);
DirectionRatios : LIST [2:3] OF REAL;
DERIVE
Dim : IfcDimensionCount := HIINDEX(DirectionRatios);
WHERE
MagnitudeGreaterZero : SIZEOF(QUERY(Tmp <* DirectionRatios | Tmp <> 0.0)) > 0;
END_ENTITY;
*/
