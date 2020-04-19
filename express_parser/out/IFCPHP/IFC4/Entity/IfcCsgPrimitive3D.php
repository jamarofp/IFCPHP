<?php

namespace IFCPHP\IFC4\Entity;
use IFCPHP\IFC4 as IFC;

class IfcCsgPrimitive3D extends IfcGeometricRepresentationItem{

	static public $elementName = 'IFCCSGPRIMITIVE3D';

	static public $translationFR = 'Primitive 3D Csg';

	static public $params = [
		[
			'name' => 'Position',
			'class' => 'Entity\IfcAxis2Placement3D',
			'type' => 'object',
			'optional' => false,
		],
	];
}
/* SUPERTYPE
	IfcBlock
	IfcRectangularPyramid
	IfcRightCircularCone
	IfcRightCircularCylinder
	IfcSphere
*/


/* DEFINITION
ENTITY IfcCsgPrimitive3D
ABSTRACT SUPERTYPE OF (ONEOF
(IfcBlock
,IfcRectangularPyramid
,IfcRightCircularCone
,IfcRightCircularCylinder
,IfcSphere))
SUBTYPE OF (IfcGeometricRepresentationItem);
Position : IfcAxis2Placement3D;
DERIVE
Dim : IfcDimensionCount := 3;
END_ENTITY;
*/
