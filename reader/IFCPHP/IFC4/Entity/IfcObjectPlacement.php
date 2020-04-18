<?php

namespace IFCPHP\IFC4\Entity;
use IFCPHP\IFC4 as IFC;

class IfcObjectPlacement extends IFC\Common{

	static public $translationFR = 'Positionnement d\'objet';

	static public $params = [
	];
}
/* SUPERTYPE
	IfcGridPlacement
	IfcLocalPlacement
*/


/* DEFINITION
ENTITY IfcObjectPlacement
ABSTRACT SUPERTYPE OF (ONEOF
(IfcGridPlacement
,IfcLocalPlacement));
INVERSE
PlacesObject : SET [0:?] OF IfcProduct FOR ObjectPlacement;
ReferencedByPlacements : SET [0:?] OF IfcLocalPlacement FOR PlacementRelTo;
END_ENTITY;
*/
