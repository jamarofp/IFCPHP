<?php

namespace IFCPHP\IFC4\Entity;
use IFCPHP\IFC4 as IFC;

class IfcTessellatedItem extends IfcGeometricRepresentationItem{

	static public $translationFR = 'Tessellation';

	static public $params = [
	];
}
/* SUPERTYPE
	IfcTessellatedFaceSet
*/


/* DEFINITION
ENTITY IfcTessellatedItem
ABSTRACT SUPERTYPE OF (ONEOF
(IfcTessellatedFaceSet))
SUBTYPE OF (IfcGeometricRepresentationItem);
END_ENTITY;
*/
