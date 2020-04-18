<?php

namespace IFCPHP\IFC4\Entity;
use IFCPHP\IFC4 as IFC;

class IfcAxis2Placement2D extends IfcPlacement{

	static public $params = [
		[
			'name' => 'Location',
			'class' => 'Entity\IfcCartesianPoint',
			'type' => 'object',
			'optional' => false,
		],
		[
			'name' => 'RefDirection',
			'class' => 'Entity\IfcDirection',
			'type' => 'object',
			'optional' => true,
		],
	];
}
/* DEFINITION
ENTITY IfcAxis2Placement2D
SUBTYPE OF (IfcPlacement);
RefDirection : OPTIONAL IfcDirection;
DERIVE
P : LIST [2:2] OF IfcDirection := IfcBuild2Axes(RefDirection);
WHERE
RefDirIs2D : (NOT (EXISTS (RefDirection))) OR (RefDirection.Dim = 2);
LocationIs2D : SELF\IfcPlacement.Location.Dim = 2;
END_ENTITY;
*/
