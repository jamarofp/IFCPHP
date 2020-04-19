<?php

namespace IFCPHP\IFC4\Entity;
use IFCPHP\IFC4 as IFC;

class IfcVertexPoint extends IfcVertex{

	static public $elementName = 'IFCVERTEXPOINT';

	static public $translationFR = 'Sommet (point)';

	static public $params = [
		[
			'name' => 'VertexGeometry',
			'class' => 'Entity\IfcPoint',
			'type' => 'object',
			'optional' => false,
		],
	];
}
/* DEFINITION
ENTITY IfcVertexPoint
SUBTYPE OF (IfcVertex);
VertexGeometry : IfcPoint;
END_ENTITY;
*/
