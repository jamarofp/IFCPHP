<?php

namespace IFCPHP\IFC4\Entity;
use IFCPHP\IFC4 as IFC;

class IfcBoxedHalfSpace extends IfcHalfSpaceSolid{

	static public $params = [
		[
			'name' => 'BaseSurface',
			'class' => 'Entity\IfcSurface',
			'type' => 'object',
			'optional' => false,
		],
		[
			'name' => 'AgreementFlag',
			'class' => 'Base\Boolean',
			'type' => 'object',
			'optional' => false,
		],
		[
			'name' => 'Enclosure',
			'class' => 'Entity\IfcBoundingBox',
			'type' => 'object',
			'optional' => false,
		],
	];
}
/* DEFINITION
ENTITY IfcBoxedHalfSpace
SUBTYPE OF (IfcHalfSpaceSolid);
Enclosure : IfcBoundingBox;
END_ENTITY;
*/
