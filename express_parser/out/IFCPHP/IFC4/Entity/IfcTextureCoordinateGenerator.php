<?php

namespace IFCPHP\IFC4\Entity;
use IFCPHP\IFC4 as IFC;

class IfcTextureCoordinateGenerator extends IfcTextureCoordinate{

	static public $elementName = 'IFCTEXTURECOORDINATEGENERATOR';

	static public $translationFR = 'Générateur de coordonnées de texture';

	static public $params = [
		[
			'name' => 'Maps',
			'class' => 'Entity\IfcSurfaceTexture',
			'type' => 'array',
			'optional' => false,
			'min' => 1,
		],
		[
			'name' => 'Mode',
			'class' => 'Type\IfcLabel',
			'type' => 'object',
			'optional' => false,
		],
		[
			'name' => 'Parameter',
			'class' => 'Type\IfcReal',
			'type' => 'array',
			'optional' => true,
			'min' => 1,
		],
	];
}
/* DEFINITION
ENTITY IfcTextureCoordinateGenerator
SUBTYPE OF (IfcTextureCoordinate);
Mode : IfcLabel;
Parameter : OPTIONAL LIST [1:?] OF IfcReal;
END_ENTITY;
*/
