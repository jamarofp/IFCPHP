<?php

namespace IFCPHP\IFC4\Entity;
use IFCPHP\IFC4 as IFC;

class IfcSurface extends IfcGeometricRepresentationItem{

	static public $translationFR = 'Surface';

	static public $params = [
	];
}
/* SUPERTYPE
	IfcBoundedSurface
	IfcElementarySurface
	IfcSweptSurface
*/


/* DEFINITION
ENTITY IfcSurface
ABSTRACT SUPERTYPE OF (ONEOF
(IfcBoundedSurface
,IfcElementarySurface
,IfcSweptSurface))
SUBTYPE OF (IfcGeometricRepresentationItem);
DERIVE
Dim : IfcDimensionCount := 3;
END_ENTITY;
*/
