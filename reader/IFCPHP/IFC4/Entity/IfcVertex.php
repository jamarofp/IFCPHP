<?php

namespace IFCPHP\IFC4\Entity;
use IFCPHP\IFC4 as IFC;

class IfcVertex extends IfcTopologicalRepresentationItem{

	static public $translationFR = 'Sommet';

	static public $params = [
	];
}
/* SUPERTYPE
	IfcVertexPoint
*/


/* DEFINITION
ENTITY IfcVertex
SUPERTYPE OF (ONEOF
(IfcVertexPoint))
SUBTYPE OF (IfcTopologicalRepresentationItem);
END_ENTITY;
*/
