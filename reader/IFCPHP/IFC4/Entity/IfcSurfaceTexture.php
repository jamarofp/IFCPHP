<?php

namespace IFCPHP\IFC4\Entity;
use IFCPHP\IFC4 as IFC;

class IfcSurfaceTexture extends IfcPresentationItem{

	static public $translationFR = 'Texture de surface';

	static public $params = [
		[
			'name' => 'RepeatS',
			'class' => 'Base\Boolean',
			'type' => 'object',
			'optional' => false,
		],
		[
			'name' => 'RepeatT',
			'class' => 'Base\Boolean',
			'type' => 'object',
			'optional' => false,
		],
		[
			'name' => 'Mode',
			'class' => 'Type\IfcIdentifier',
			'type' => 'object',
			'optional' => true,
		],
		[
			'name' => 'TextureTransform',
			'class' => 'Entity\IfcCartesianTransformationOperator2D',
			'type' => 'object',
			'optional' => true,
		],
		[
			'name' => 'Parameter',
			'class' => 'Type\IfcIdentifier',
			'type' => 'array',
			'optional' => true,
			'min' => 1,
		],
	];
}
/* SUPERTYPE
	IfcBlobTexture
	IfcImageTexture
	IfcPixelTexture
*/


/* DEFINITION
ENTITY IfcSurfaceTexture
ABSTRACT SUPERTYPE OF (ONEOF
(IfcBlobTexture
,IfcImageTexture
,IfcPixelTexture))
SUBTYPE OF (IfcPresentationItem);
RepeatS : BOOLEAN;
RepeatT : BOOLEAN;
Mode : OPTIONAL IfcIdentifier;
TextureTransform : OPTIONAL IfcCartesianTransformationOperator2D;
Parameter : OPTIONAL LIST [1:?] OF IfcIdentifier;
INVERSE
IsMappedBy : SET [0:?] OF IfcTextureCoordinate FOR Maps;
UsedInStyles : SET [0:?] OF IfcSurfaceStyleWithTextures FOR Textures;
END_ENTITY;
*/
