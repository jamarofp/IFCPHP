<?php

namespace IFCPHP\IFC4\Entity;
use IFCPHP\IFC4 as IFC;

class IfcTopologicalRepresentationItem extends IfcRepresentationItem{

	static public $elementName = 'IFCTOPOLOGICALREPRESENTATIONITEM';

	static public $translationFR = 'Item de représentation topologique';

	static public $params = [
	];
}
/* SUPERTYPE
	IfcConnectedFaceSet
	IfcEdge
	IfcFace
	IfcFaceBound
	IfcLoop
	IfcPath
	IfcVertex
*/


/* DEFINITION
ENTITY IfcTopologicalRepresentationItem
ABSTRACT SUPERTYPE OF (ONEOF
(IfcConnectedFaceSet
,IfcEdge
,IfcFace
,IfcFaceBound
,IfcLoop
,IfcPath
,IfcVertex))
SUBTYPE OF (IfcRepresentationItem);
END_ENTITY;
*/
