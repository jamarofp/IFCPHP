<?php

namespace IFCPHP\IFC4\Entity;
use IFCPHP\IFC4 as IFC;

class IfcTextureCoordinate extends IfcPresentationItem{

	static public $elementName = 'IFCTEXTURECOORDINATE';

	static public $translationFR = 'Coordonnées de texture';

	static public $params = [
		[
			'name' => 'Maps',
			'class' => 'Entity\IfcSurfaceTexture',
			'type' => 'array',
			'optional' => false,
			'min' => 1,
		],
	];
}
/* SUPERTYPE
	IfcIndexedTextureMap
	IfcTextureCoordinateGenerator
	IfcTextureMap
*/


/* DEFINITION
ENTITY IfcTextureCoordinate
ABSTRACT SUPERTYPE OF (ONEOF
(IfcIndexedTextureMap
,IfcTextureCoordinateGenerator
,IfcTextureMap))
SUBTYPE OF (IfcPresentationItem);
Maps : LIST [1:?] OF IfcSurfaceTexture;
END_ENTITY;
*/
