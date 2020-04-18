<?php

namespace IFCPHP\IFC4\Entity;
use IFCPHP\IFC4 as IFC;

class IfcEdgeLoop extends IfcLoop{

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
ENTITY IfcEdgeLoop
SUBTYPE OF (IfcLoop);
EdgeList : LIST [1:?] OF IfcOrientedEdge;
DERIVE
Ne : INTEGER := SIZEOF(EdgeList);
WHERE
IsClosed : (EdgeList[1].EdgeStart) :=: (EdgeList[Ne].EdgeEnd);
IsContinuous : IfcLoopHeadToTail(SELF);
END_ENTITY;
*/
