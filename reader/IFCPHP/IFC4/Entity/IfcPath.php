<?php

namespace IFCPHP\IFC4\Entity;
use IFCPHP\IFC4 as IFC;

class IfcPath extends IfcTopologicalRepresentationItem{

	static public $translationFR = 'Chemin';

	static public $params = [
		[
			'name' => 'EdgeList',
			'class' => 'Entity\IfcOrientedEdge',
			'type' => 'array',
			'optional' => false,
			'min' => 1,
		],
	];
}
/* DEFINITION
ENTITY IfcPath
SUBTYPE OF (IfcTopologicalRepresentationItem);
EdgeList : LIST [1:?] OF UNIQUE IfcOrientedEdge;
WHERE
IsContinuous : IfcPathHeadToTail(SELF);
END_ENTITY;
*/
