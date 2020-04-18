<?php

namespace IFCPHP\IFC4\Entity;
use IFCPHP\IFC4 as IFC;

class IfcFacetedBrep extends IfcManifoldSolidBrep{

	static public $params = [
		[
			'name' => 'Outer',
			'class' => 'Entity\IfcClosedShell',
			'type' => 'object',
			'optional' => false,
		],
	];
}
/* SUPERTYPE
	IfcFacetedBrepWithVoids
*/


/* DEFINITION
ENTITY IfcFacetedBrep
SUPERTYPE OF (ONEOF
(IfcFacetedBrepWithVoids))
SUBTYPE OF (IfcManifoldSolidBrep);
END_ENTITY;
*/
