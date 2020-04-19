<?php

namespace IFCPHP\IFC4\Entity;
use IFCPHP\IFC4 as IFC;

class IfcConnectionSurfaceGeometry extends IfcConnectionGeometry{

	static public $elementName = 'IFCCONNECTIONSURFACEGEOMETRY';

	static public $params = [
		[
			'name' => 'SurfaceOnRelatingElement',
			'class' => 'Type\IfcSurfaceOrFaceSurface',
			'type' => 'object',
			'optional' => false,
		],
		[
			'name' => 'SurfaceOnRelatedElement',
			'class' => 'Type\IfcSurfaceOrFaceSurface',
			'type' => 'object',
			'optional' => true,
		],
	];
}
/* DEFINITION
ENTITY IfcConnectionSurfaceGeometry
SUBTYPE OF (IfcConnectionGeometry);
SurfaceOnRelatingElement : IfcSurfaceOrFaceSurface;
SurfaceOnRelatedElement : OPTIONAL IfcSurfaceOrFaceSurface;
END_ENTITY;
*/
