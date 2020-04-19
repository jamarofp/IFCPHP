<?php

namespace IFCPHP\IFC4\Entity;
use IFCPHP\IFC4 as IFC;

class IfcFacetedBrepWithVoids extends IfcFacetedBrep{

	static public $elementName = 'IFCFACETEDBREPWITHVOIDS';

	static public $params = [
		[
			'name' => 'Outer',
			'class' => 'Entity\IfcClosedShell',
			'type' => 'object',
			'optional' => false,
		],
		[
			'name' => 'Voids',
			'class' => 'Entity\IfcClosedShell',
			'type' => 'array',
			'optional' => false,
			'min' => 1,
		],
	];
}
/* DEFINITION
ENTITY IfcFacetedBrepWithVoids
SUBTYPE OF (IfcFacetedBrep);
Voids : SET [1:?] OF IfcClosedShell;
END_ENTITY;
*/
