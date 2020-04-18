<?php

namespace IFCPHP\IFC4\Entity;
use IFCPHP\IFC4 as IFC;

class IfcPlacement extends IfcGeometricRepresentationItem{

	static public $translationFR = 'Positionnement';

	static public $params = [
		[
			'name' => 'Location',
			'class' => 'Entity\IfcCartesianPoint',
			'type' => 'object',
			'optional' => false,
		],
	];
}
/* SUPERTYPE
	IfcAxis1Placement
	IfcAxis2Placement2D
	IfcAxis2Placement3D
*/


/* DEFINITION
ENTITY IfcPlacement
ABSTRACT SUPERTYPE OF (ONEOF
(IfcAxis1Placement
,IfcAxis2Placement2D
,IfcAxis2Placement3D))
SUBTYPE OF (IfcGeometricRepresentationItem);
Location : IfcCartesianPoint;
DERIVE
Dim : IfcDimensionCount := Location.Dim;
END_ENTITY;
*/
