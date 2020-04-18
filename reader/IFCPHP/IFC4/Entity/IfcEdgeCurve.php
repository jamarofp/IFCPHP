<?php

namespace IFCPHP\IFC4\Entity;
use IFCPHP\IFC4 as IFC;

class IfcEdgeCurve extends IfcEdge{

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
		[
			'name' => 'EdgeGeometry',
			'class' => 'Entity\IfcCurve',
			'type' => 'object',
			'optional' => false,
		],
		[
			'name' => 'SameSense',
			'class' => 'Base\Boolean',
			'type' => 'object',
			'optional' => false,
		],
	];
}
/* DEFINITION
ENTITY IfcEdgeCurve
SUBTYPE OF (IfcEdge);
EdgeGeometry : IfcCurve;
SameSense : BOOLEAN;
END_ENTITY;
*/
