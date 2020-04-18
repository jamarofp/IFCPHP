<?php

namespace IFCPHP\IFC4\Entity;
use IFCPHP\IFC4 as IFC;

class IfcPoint extends IfcGeometricRepresentationItem{

	static public $translationFR = 'Point';

	static public $params = [
	];
}
/* SUPERTYPE
	IfcCartesianPoint
	IfcPointOnCurve
	IfcPointOnSurface
*/


/* DEFINITION
ENTITY IfcPoint
ABSTRACT SUPERTYPE OF (ONEOF
(IfcCartesianPoint
,IfcPointOnCurve
,IfcPointOnSurface))
SUBTYPE OF (IfcGeometricRepresentationItem);
END_ENTITY;
*/
