<?php

namespace IFCPHP\IFC4\Entity;
use IFCPHP\IFC4 as IFC;

class IfcManifoldSolidBrep extends IfcSolidModel{

	static public $elementName = 'IFCMANIFOLDSOLIDBREP';

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
	IfcAdvancedBrep
	IfcFacetedBrep
*/


/* DEFINITION
ENTITY IfcManifoldSolidBrep
ABSTRACT SUPERTYPE OF (ONEOF
(IfcAdvancedBrep
,IfcFacetedBrep))
SUBTYPE OF (IfcSolidModel);
Outer : IfcClosedShell;
END_ENTITY;
*/
