<?php

namespace IFCPHP\IFC4\Entity;
use IFCPHP\IFC4 as IFC;

class IfcFaceBound extends IfcTopologicalRepresentationItem{

	static public $translationFR = 'Contour de face';

	static public $params = [
		[
			'name' => 'Bound',
			'class' => 'Entity\IfcLoop',
			'type' => 'object',
			'optional' => false,
		],
		[
			'name' => 'Orientation',
			'class' => 'Base\Boolean',
			'type' => 'object',
			'optional' => false,
		],
	];
}
/* SUPERTYPE
	IfcFaceOuterBound
*/


/* DEFINITION
ENTITY IfcFaceBound
SUPERTYPE OF (ONEOF
(IfcFaceOuterBound))
SUBTYPE OF (IfcTopologicalRepresentationItem);
Bound : IfcLoop;
Orientation : BOOLEAN;
END_ENTITY;
*/
