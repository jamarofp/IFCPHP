<?php

namespace IFCPHP\IFC4\Entity;
use IFCPHP\IFC4 as IFC;

class IfcFaceBasedSurfaceModel extends IfcGeometricRepresentationItem{

	static public $elementName = 'IFCFACEBASEDSURFACEMODEL';

	static public $params = [
		[
			'name' => 'FbsmFaces',
			'class' => 'Entity\IfcConnectedFaceSet',
			'type' => 'array',
			'optional' => false,
			'min' => 1,
		],
	];
}
/* DEFINITION
ENTITY IfcFaceBasedSurfaceModel
SUBTYPE OF (IfcGeometricRepresentationItem);
FbsmFaces : SET [1:?] OF IfcConnectedFaceSet;
DERIVE
Dim : IfcDimensionCount := 3;
END_ENTITY;
*/
