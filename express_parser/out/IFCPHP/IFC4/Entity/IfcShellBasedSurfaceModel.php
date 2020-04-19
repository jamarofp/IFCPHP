<?php

namespace IFCPHP\IFC4\Entity;
use IFCPHP\IFC4 as IFC;

class IfcShellBasedSurfaceModel extends IfcGeometricRepresentationItem{

	static public $elementName = 'IFCSHELLBASEDSURFACEMODEL';

	static public $params = [
		[
			'name' => 'SbsmBoundary',
			'class' => 'Type\IfcShell',
			'type' => 'array',
			'optional' => false,
			'min' => 1,
		],
	];
}
/* DEFINITION
ENTITY IfcShellBasedSurfaceModel
SUBTYPE OF (IfcGeometricRepresentationItem);
SbsmBoundary : SET [1:?] OF IfcShell;
DERIVE
Dim : IfcDimensionCount := 3;
END_ENTITY;
*/
