<?php

namespace IFCPHP\IFC4\Entity;
use IFCPHP\IFC4 as IFC;

class IfcBoundedCurve extends IfcCurve{

	static public $elementName = 'IFCBOUNDEDCURVE';

	static public $translationFR = 'Courbe englobée';

	static public $params = [
	];
}
/* SUPERTYPE
	IfcBSplineCurve
	IfcCompositeCurve
	IfcPolyline
	IfcTrimmedCurve
*/


/* DEFINITION
ENTITY IfcBoundedCurve
ABSTRACT SUPERTYPE OF (ONEOF
(IfcBSplineCurve
,IfcCompositeCurve
,IfcPolyline
,IfcTrimmedCurve))
SUBTYPE OF (IfcCurve);
END_ENTITY;
*/
