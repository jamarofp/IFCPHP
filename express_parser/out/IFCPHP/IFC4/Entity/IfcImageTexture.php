<?php

namespace IFCPHP\IFC4\Entity;
use IFCPHP\IFC4 as IFC;

class IfcImageTexture extends IfcSurfaceTexture{

	static public $elementName = 'IFCIMAGETEXTURE';

	static public $translationFR = 'Texture d\'image';

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
			'name' => 'URLReference',
			'class' => 'Type\IfcURIReference',
			'type' => 'object',
			'optional' => false,
		],
	];
}
/* DEFINITION
ENTITY IfcImageTexture
SUBTYPE OF (IfcSurfaceTexture);
URLReference : IfcURIReference;
END_ENTITY;
*/
