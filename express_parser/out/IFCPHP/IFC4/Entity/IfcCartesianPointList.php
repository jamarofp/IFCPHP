<?php

namespace IFCPHP\IFC4\Entity;
use IFCPHP\IFC4 as IFC;

class IfcCartesianPointList extends IfcGeometricRepresentationItem{

	static public $elementName = 'IFCCARTESIANPOINTLIST';

	static public $translationFR = 'Liste de points cartésiens';

	static public $params = [
	];
}
/* SUPERTYPE
	IfcCartesianPointList3D
*/


/* DEFINITION
ENTITY IfcCartesianPointList
ABSTRACT SUPERTYPE OF (ONEOF
(IfcCartesianPointList3D))
SUBTYPE OF (IfcGeometricRepresentationItem);
END_ENTITY;
*/
