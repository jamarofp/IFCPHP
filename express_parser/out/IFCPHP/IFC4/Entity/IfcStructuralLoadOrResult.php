<?php

namespace IFCPHP\IFC4\Entity;
use IFCPHP\IFC4 as IFC;

class IfcStructuralLoadOrResult extends IfcStructuralLoad{

	static public $elementName = 'IFCSTRUCTURALLOADORRESULT';

	static public $params = [
		[
			'name' => 'Name',
			'class' => 'Type\IfcLabel',
			'type' => 'object',
			'optional' => true,
		],
	];
}
/* SUPERTYPE
	IfcStructuralLoadStatic
	IfcSurfaceReinforcementArea
*/


/* DEFINITION
ENTITY IfcStructuralLoadOrResult
ABSTRACT SUPERTYPE OF (ONEOF
(IfcStructuralLoadStatic
,IfcSurfaceReinforcementArea))
SUBTYPE OF (IfcStructuralLoad);
END_ENTITY;
*/
