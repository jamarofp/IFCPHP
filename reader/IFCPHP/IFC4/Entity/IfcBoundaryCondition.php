<?php

namespace IFCPHP\IFC4\Entity;
use IFCPHP\IFC4 as IFC;

class IfcBoundaryCondition extends IFC\Common{

	static public $translationFR = 'Condition de limite';

	static public $params = [
		[
			'name' => 'Name',
			'class' => 'Type\IfcLabel',
			'type' => 'object',
			'optional' => true,
		],
	];
}
/* SUPERTYPE
	IfcBoundaryEdgeCondition
	IfcBoundaryFaceCondition
	IfcBoundaryNodeCondition
*/


/* DEFINITION
ENTITY IfcBoundaryCondition
ABSTRACT SUPERTYPE OF (ONEOF
(IfcBoundaryEdgeCondition
,IfcBoundaryFaceCondition
,IfcBoundaryNodeCondition));
Name : OPTIONAL IfcLabel;
END_ENTITY;
*/
