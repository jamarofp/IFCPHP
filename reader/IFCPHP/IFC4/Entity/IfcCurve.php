<?php

namespace IFCPHP\IFC4\Entity;
use IFCPHP\IFC4 as IFC;

class IfcCurve extends IfcGeometricRepresentationItem{

	static public $translationFR = 'Courbe ';

	static public $params = [
	];
}
/* SUPERTYPE
	IfcBoundedCurve
	IfcConic
	IfcLine
	IfcOffsetCurve2D
	IfcOffsetCurve3D
	IfcPcurve
*/


/* DEFINITION
ENTITY IfcCurve
ABSTRACT SUPERTYPE OF (ONEOF
(IfcBoundedCurve
,IfcConic
,IfcLine
,IfcOffsetCurve2D
,IfcOffsetCurve3D
,IfcPcurve))
SUBTYPE OF (IfcGeometricRepresentationItem);
DERIVE
Dim : IfcDimensionCount := IfcCurveDim(SELF);
END_ENTITY;
*/
