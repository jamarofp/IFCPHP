<?php

namespace IFCPHP\IFC4\Entity;
use IFCPHP\IFC4 as IFC;

class IfcElementarySurface extends IfcSurface{

	static public $translationFR = 'Surface élémentaire';

	static public $params = [
		[
			'name' => 'Position',
			'class' => 'Entity\IfcAxis2Placement3D',
			'type' => 'object',
			'optional' => false,
		],
	];
}
/* SUPERTYPE
	IfcCylindricalSurface
	IfcPlane
*/


/* DEFINITION
ENTITY IfcElementarySurface
ABSTRACT SUPERTYPE OF (ONEOF
(IfcCylindricalSurface
,IfcPlane))
SUBTYPE OF (IfcSurface);
Position : IfcAxis2Placement3D;
END_ENTITY;
*/
