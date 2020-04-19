<?php

namespace IFCPHP\IFC4\Entity;
use IFCPHP\IFC4 as IFC;

class IfcRepresentationItem extends IFC\Common{

	static public $elementName = 'IFCREPRESENTATIONITEM';

	static public $translationFR = 'Item de représentation';

	static public $params = [
	];
}
/* SUPERTYPE
	IfcGeometricRepresentationItem
	IfcMappedItem
	IfcStyledItem
	IfcTopologicalRepresentationItem
*/


/* DEFINITION
ENTITY IfcRepresentationItem
ABSTRACT SUPERTYPE OF (ONEOF
(IfcGeometricRepresentationItem
,IfcMappedItem
,IfcStyledItem
,IfcTopologicalRepresentationItem));
INVERSE
LayerAssignment : SET [0:1] OF IfcPresentationLayerAssignment FOR AssignedItems;
StyledByItem : SET [0:1] OF IfcStyledItem FOR Item;
END_ENTITY;
*/
