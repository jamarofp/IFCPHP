<?php

namespace IFCPHP\IFC4\Entity;
use IFCPHP\IFC4 as IFC;

class IfcBoundedSurface extends IfcSurface{

	static public $translationFR = 'Surface englobée';

	static public $params = [
	];
}
/* SUPERTYPE
	IfcBSplineSurface
	IfcCurveBoundedPlane
	IfcCurveBoundedSurface
	IfcRectangularTrimmedSurface
*/


/* DEFINITION
ENTITY IfcBoundedSurface
ABSTRACT SUPERTYPE OF (ONEOF
(IfcBSplineSurface
,IfcCurveBoundedPlane
,IfcCurveBoundedSurface
,IfcRectangularTrimmedSurface))
SUBTYPE OF (IfcSurface);
END_ENTITY;
*/
