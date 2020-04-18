<?php

namespace IFCPHP\IFC4\Entity;
use IFCPHP\IFC4 as IFC;

class IfcSolidModel extends IfcGeometricRepresentationItem{

	static public $translationFR = 'Modèle solide';

	static public $params = [
	];
}
/* SUPERTYPE
	IfcCsgSolid
	IfcManifoldSolidBrep
	IfcSweptAreaSolid
	IfcSweptDiskSolid
*/


/* DEFINITION
ENTITY IfcSolidModel
ABSTRACT SUPERTYPE OF (ONEOF
(IfcCsgSolid
,IfcManifoldSolidBrep
,IfcSweptAreaSolid
,IfcSweptDiskSolid))
SUBTYPE OF (IfcGeometricRepresentationItem);
DERIVE
Dim : IfcDimensionCount := 3;
END_ENTITY;
*/
