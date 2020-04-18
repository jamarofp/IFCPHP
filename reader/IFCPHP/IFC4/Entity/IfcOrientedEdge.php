<?php

namespace IFCPHP\IFC4\Entity;
use IFCPHP\IFC4 as IFC;

class IfcOrientedEdge extends IfcEdge{

	static public $translationFR = 'Arête orientée';

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
			'name' => 'EdgeElement',
			'class' => 'Entity\IfcEdge',
			'type' => 'object',
			'optional' => false,
		],
		[
			'name' => 'Orientation',
			'class' => 'Base\Boolean',
			'type' => 'object',
			'optional' => false,
		],
	];
}
/* DEFINITION
ENTITY IfcOrientedEdge
SUBTYPE OF (IfcEdge);
EdgeElement : IfcEdge;
Orientation : BOOLEAN;
DERIVE
SELF\IfcEdge.EdgeStart : IfcVertex := IfcBooleanChoose
(Orientation, EdgeElement.EdgeStart, EdgeElement.EdgeEnd);
SELF\IfcEdge.EdgeEnd : IfcVertex := IfcBooleanChoose
(Orientation, EdgeElement.EdgeEnd, EdgeElement.EdgeStart);
WHERE
EdgeElementNotOriented : NOT('IFC4.IFCORIENTEDEDGE' IN TYPEOF(EdgeElement));
END_ENTITY;
*/
