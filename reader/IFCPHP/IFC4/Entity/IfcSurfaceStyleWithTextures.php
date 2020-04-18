<?php

namespace IFCPHP\IFC4\Entity;
use IFCPHP\IFC4 as IFC;

class IfcSurfaceStyleWithTextures extends IfcPresentationItem{

	static public $translationFR = 'Style de surface texturée';

	static public $params = [
		[
			'name' => 'Textures',
			'class' => 'Entity\IfcSurfaceTexture',
			'type' => 'array',
			'optional' => false,
			'min' => 1,
		],
	];
}
/* DEFINITION
ENTITY IfcSurfaceStyleWithTextures
SUBTYPE OF (IfcPresentationItem);
Textures : LIST [1:?] OF IfcSurfaceTexture;
END_ENTITY;
*/
