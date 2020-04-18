<?php

namespace IFCPHP\IFC4\Entity;
use IFCPHP\IFC4 as IFC;

class IfcHalfSpaceSolid extends IfcGeometricRepresentationItem{

	static public $params = [
		[
			'name' => 'BaseSurface',
			'class' => 'Entity\IfcSurface',
			'type' => 'object',
			'optional' => false,
		],
		[
			'name' => 'AgreementFlag',
			'class' => 'Base\Boolean',
			'type' => 'object',
			'optional' => false,
		],
	];
}
/* SUPERTYPE
	IfcBoxedHalfSpace
	IfcPolygonalBoundedHalfSpace
*/


/* DEFINITION
ENTITY IfcHalfSpaceSolid
SUPERTYPE OF (ONEOF
(IfcBoxedHalfSpace
,IfcPolygonalBoundedHalfSpace))
SUBTYPE OF (IfcGeometricRepresentationItem);
BaseSurface : IfcSurface;
AgreementFlag : BOOLEAN;
DERIVE
Dim : IfcDimensionCount := 3;
END_ENTITY;
*/
