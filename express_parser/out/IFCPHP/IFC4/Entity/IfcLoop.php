<?php

namespace IFCPHP\IFC4\Entity;
use IFCPHP\IFC4 as IFC;

class IfcLoop extends IfcTopologicalRepresentationItem{

	static public $elementName = 'IFCLOOP';

	static public $translationFR = 'Boucle';

	static public $params = [
	];
}
/* SUPERTYPE
	IfcEdgeLoop
	IfcPolyLoop
	IfcVertexLoop
*/


/* DEFINITION
ENTITY IfcLoop
SUPERTYPE OF (ONEOF
(IfcEdgeLoop
,IfcPolyLoop
,IfcVertexLoop))
SUBTYPE OF (IfcTopologicalRepresentationItem);
END_ENTITY;
*/
