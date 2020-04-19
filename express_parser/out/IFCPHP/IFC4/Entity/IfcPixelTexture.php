<?php

namespace IFCPHP\IFC4\Entity;
use IFCPHP\IFC4 as IFC;

class IfcPixelTexture extends IfcSurfaceTexture{

	static public $elementName = 'IFCPIXELTEXTURE';

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
			'name' => 'Width',
			'class' => 'Type\IfcInteger',
			'type' => 'object',
			'optional' => false,
		],
		[
			'name' => 'Height',
			'class' => 'Type\IfcInteger',
			'type' => 'object',
			'optional' => false,
		],
		[
			'name' => 'ColourComponents',
			'class' => 'Type\IfcInteger',
			'type' => 'object',
			'optional' => false,
		],
		[
			'name' => 'Pixel',
			'class' => 'Base\Binary',
			'type' => 'array',
			'optional' => false,
			'min' => 1,
		],
	];
}
/* DEFINITION
ENTITY IfcPixelTexture
SUBTYPE OF (IfcSurfaceTexture);
Width : IfcInteger;
Height : IfcInteger;
ColourComponents : IfcInteger;
Pixel : LIST [1:?] OF BINARY(32);
WHERE
MinPixelInS : Width >= 1;
MinPixelInT : Height >= 1;
NumberOfColours : {1 <= ColourComponents <= 4};
SizeOfPixelList : SIZEOF(Pixel) = (Width * Height);
PixelAsByteAndSameLength : SIZEOF(QUERY(temp<* Pixel |
(BLENGTH(temp) MOD 8 = 0) AND
(BLENGTH(temp) = BLENGTH(Pixel[1]))
)) = SIZEOF(Pixel);
END_ENTITY;
*/
