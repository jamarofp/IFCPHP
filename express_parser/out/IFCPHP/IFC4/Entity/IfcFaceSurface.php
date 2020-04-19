<?php

namespace IFCPHP\IFC4\Entity;
use IFCPHP\IFC4 as IFC;

class IfcFaceSurface extends IfcFace{

	static public $elementName = 'IFCFACESURFACE';

	static public $params = [
		[
			'name' => 'Bounds',
			'class' => 'Entity\IfcFaceBound',
			'type' => 'array',
			'optional' => false,
			'min' => 1,
		],
		[
			'name' => 'FaceSurface',
			'class' => 'Entity\IfcSurface',
			'type' => 'object',
			'optional' => false,
		],
		[
			'name' => 'SameSense',
			'class' => 'Base\Boolean',
			'type' => 'object',
			'optional' => false,
		],
	];
}
/* SUPERTYPE
	IfcAdvancedFace
*/


/* DEFINITION
ENTITY IfcFaceSurface
SUPERTYPE OF (ONEOF
(IfcAdvancedFace))
SUBTYPE OF (IfcFace);
FaceSurface : IfcSurface;
SameSense : BOOLEAN;
END_ENTITY;
*/
