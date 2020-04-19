<?php

namespace IFCPHP\IFC4\Entity;
use IFCPHP\IFC4 as IFC;

class IfcSubedge extends IfcEdge{

	static public $elementName = 'IFCSUBEDGE';

	static public $translationFR = 'Sous arête';

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
			'name' => 'ParentEdge',
			'class' => 'Entity\IfcEdge',
			'type' => 'object',
			'optional' => false,
		],
	];
}
/* DEFINITION
ENTITY IfcSubedge
SUBTYPE OF (IfcEdge);
ParentEdge : IfcEdge;
END_ENTITY;
*/
