<?php

namespace IFCPHP\IFC4\Entity;
use IFCPHP\IFC4 as IFC;

class IfcPlane extends IfcElementarySurface{

	static public $translationFR = 'Plan';

	static public $params = [
		[
			'name' => 'Position',
			'class' => 'Entity\IfcAxis2Placement3D',
			'type' => 'object',
			'optional' => false,
		],
	];
}
/* DEFINITION
ENTITY IfcPlane
SUBTYPE OF (IfcElementarySurface);
END_ENTITY;
*/
