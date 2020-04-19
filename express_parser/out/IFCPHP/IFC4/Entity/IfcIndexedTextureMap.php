<?php

namespace IFCPHP\IFC4\Entity;
use IFCPHP\IFC4 as IFC;

class IfcIndexedTextureMap extends IfcTextureCoordinate{

	static public $elementName = 'IFCINDEXEDTEXTUREMAP';

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
	];
}
/* SUPERTYPE
	IfcIndexedTriangleTextureMap
*/


/* DEFINITION
ENTITY IfcIndexedTextureMap
ABSTRACT SUPERTYPE OF (ONEOF
(IfcIndexedTriangleTextureMap))
SUBTYPE OF (IfcTextureCoordinate);
MappedTo : IfcTessellatedFaceSet;
TexCoords : IfcTextureVertexList;
END_ENTITY;
*/
