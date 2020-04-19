<?php

namespace IFCPHP\IFC4\Entity;
use IFCPHP\IFC4 as IFC;

class IfcEdge extends IfcTopologicalRepresentationItem{

	static public $elementName = 'IFCEDGE';

	static public $translationFR = 'Arête';

	static public $params = [
		[
			'name' => 'EdgeStart',
			'class' => 'Entity\IfcVertex',
			'type' => 'object',
			'optional' => false,
		],
		[
			'name' => 'EdgeEnd',
			'class' => 'Entity\IfcVertex',
			'type' => 'object',
			'optional' => false,
		],
	];
}
/* SUPERTYPE
	IfcEdgeCurve
	IfcOrientedEdge
	IfcSubedge
*/


/* DEFINITION
ENTITY IfcEdge
SUPERTYPE OF (ONEOF
(IfcEdgeCurve
,IfcOrientedEdge
,IfcSubedge))
SUBTYPE OF (IfcTopologicalRepresentationItem);
EdgeStart : IfcVertex;
EdgeEnd : IfcVertex;
END_ENTITY;
*/
