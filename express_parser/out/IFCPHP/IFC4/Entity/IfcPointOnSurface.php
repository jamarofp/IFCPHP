<?php

namespace IFCPHP\IFC4\Entity;
use IFCPHP\IFC4 as IFC;

class IfcPointOnSurface extends IfcPoint{

	static public $elementName = 'IFCPOINTONSURFACE';

	static public $translationFR = 'Point de surface';

	static public $params = [
		[
			'name' => 'BasisSurface',
			'class' => 'Entity\IfcSurface',
			'type' => 'object',
			'optional' => false,
		],
		[
			'name' => 'PointParameterU',
			'class' => 'Type\IfcParameterValue',
			'type' => 'object',
			'optional' => false,
		],
		[
			'name' => 'PointParameterV',
			'class' => 'Type\IfcParameterValue',
			'type' => 'object',
			'optional' => false,
		],
	];
}
/* DEFINITION
ENTITY IfcPointOnSurface
SUBTYPE OF (IfcPoint);
BasisSurface : IfcSurface;
PointParameterU : IfcParameterValue;
PointParameterV : IfcParameterValue;
DERIVE
Dim : IfcDimensionCount := BasisSurface.Dim;
END_ENTITY;
*/
