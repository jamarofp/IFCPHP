<?php

namespace IFCPHP\IFC4\Entity;
use IFCPHP\IFC4 as IFC;

class IfcBlobTexture extends IfcSurfaceTexture{

	static public $elementName = 'IFCBLOBTEXTURE';

	static public $translationFR = 'Blob de texture';

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
		[
			'name' => 'RasterFormat',
			'class' => 'Type\IfcIdentifier',
			'type' => 'object',
			'optional' => false,
		],
		[
			'name' => 'RasterCode',
			'class' => 'Base\Binary',
			'type' => 'object',
			'optional' => false,
		],
	];
}
/* DEFINITION
ENTITY IfcBlobTexture
SUBTYPE OF (IfcSurfaceTexture);
RasterFormat : IfcIdentifier;
RasterCode : BINARY;
WHERE
SupportedRasterFormat : SELF.RasterFormat IN ['BMP', 'JPG', 'GIF', 'PNG'];
RasterCodeByteStream : BLENGTH(RasterCode) MOD 8 = 0;
END_ENTITY;
*/
