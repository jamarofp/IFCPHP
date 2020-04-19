<?php

namespace IFCPHP\IFC4\Entity;
use IFCPHP\IFC4 as IFC;

class IfcTextureMap extends IfcTextureCoordinate{

	static public $elementName = 'IFCTEXTUREMAP';

	static public $translationFR = 'Image de texture';

	static public $params = [
		[
			'name' => 'Maps',
			'class' => 'Entity\IfcSurfaceTexture',
			'type' => 'array',
			'optional' => false,
			'min' => 1,
		],
		[
			'name' => 'Vertices',
			'class' => 'Entity\IfcTextureVertex',
			'type' => 'array',
			'optional' => false,
			'min' => 3,
		],
		[
			'name' => 'MappedTo',
			'class' => 'Entity\IfcFace',
			'type' => 'object',
			'optional' => false,
		],
	];
}
/* DEFINITION
ENTITY IfcTextureMap
SUBTYPE OF (IfcTextureCoordinate);
Vertices : LIST [3:?] OF IfcTextureVertex;
MappedTo : IfcFace;
END_ENTITY;
*/
