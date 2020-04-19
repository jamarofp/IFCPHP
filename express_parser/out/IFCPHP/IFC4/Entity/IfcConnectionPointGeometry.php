<?php

namespace IFCPHP\IFC4\Entity;
use IFCPHP\IFC4 as IFC;

class IfcConnectionPointGeometry extends IfcConnectionGeometry{

	static public $elementName = 'IFCCONNECTIONPOINTGEOMETRY';

	static public $params = [
		[
			'name' => 'PointOnRelatingElement',
			'class' => 'Type\IfcPointOrVertexPoint',
			'type' => 'object',
			'optional' => false,
		],
		[
			'name' => 'PointOnRelatedElement',
			'class' => 'Type\IfcPointOrVertexPoint',
			'type' => 'object',
			'optional' => true,
		],
	];
}
/* SUPERTYPE
	IfcConnectionPointEccentricity
*/


/* DEFINITION
ENTITY IfcConnectionPointGeometry
SUPERTYPE OF (ONEOF
(IfcConnectionPointEccentricity))
SUBTYPE OF (IfcConnectionGeometry);
PointOnRelatingElement : IfcPointOrVertexPoint;
PointOnRelatedElement : OPTIONAL IfcPointOrVertexPoint;
END_ENTITY;
*/
