<?php

namespace IFCPHP\IFC4\Entity;
use IFCPHP\IFC4 as IFC;

class IfcIndexedTriangleTextureMap extends IfcIndexedTextureMap{

	static public $params = [
		[
			'name' => 'Maps',
			'class' => 'Entity\IfcSurfaceTexture',
			'type' => 'array',
			'optional' => false,
			'min' => 1,
		],
		[
			'name' => 'MappedTo',
			'class' => 'Entity\IfcTessellatedFaceSet',
			'type' => 'object',
			'optional' => false,
		],
		[
			'name' => 'TexCoords',
			'class' => 'Entity\IfcTextureVertexList',
			'type' => 'object',
			'optional' => false,
		],
		[
			'name' => 'TexCoordIndex',
			'class' => 'Base\Integer',
			'type' => 'array',
			'optional' => true,
			'min' => 3,
			'max' => 3,
		],
	];
}
/* DEFINITION
ENTITY IfcIndexedTriangleTextureMap
SUBTYPE OF (IfcIndexedTextureMap);
TexCoordIndex : OPTIONAL LIST [1:?] OF LIST [3:3] OF INTEGER;
END_ENTITY;
*/
