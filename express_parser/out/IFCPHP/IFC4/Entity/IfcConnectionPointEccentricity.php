<?php

namespace IFCPHP\IFC4\Entity;
use IFCPHP\IFC4 as IFC;

class IfcConnectionPointEccentricity extends IfcConnectionPointGeometry{

	static public $elementName = 'IFCCONNECTIONPOINTECCENTRICITY';

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
		[
			'name' => 'EccentricityInX',
			'class' => 'Type\IfcLengthMeasure',
			'type' => 'object',
			'optional' => true,
		],
		[
			'name' => 'EccentricityInY',
			'class' => 'Type\IfcLengthMeasure',
			'type' => 'object',
			'optional' => true,
		],
		[
			'name' => 'EccentricityInZ',
			'class' => 'Type\IfcLengthMeasure',
			'type' => 'object',
			'optional' => true,
		],
	];
}
/* DEFINITION
ENTITY IfcConnectionPointEccentricity
SUBTYPE OF (IfcConnectionPointGeometry);
EccentricityInX : OPTIONAL IfcLengthMeasure;
EccentricityInY : OPTIONAL IfcLengthMeasure;
EccentricityInZ : OPTIONAL IfcLengthMeasure;
END_ENTITY;
*/
