<?php

namespace IFCPHP\IFC4\Entity;
use IFCPHP\IFC4 as IFC;

class IfcStructuralLoadStatic extends IfcStructuralLoadOrResult{

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
	IfcStructuralLoadLinearForce
	IfcStructuralLoadPlanarForce
	IfcStructuralLoadSingleDisplacement
	IfcStructuralLoadSingleForce
	IfcStructuralLoadTemperature
*/


/* DEFINITION
ENTITY IfcStructuralLoadStatic
ABSTRACT SUPERTYPE OF (ONEOF
(IfcStructuralLoadLinearForce
,IfcStructuralLoadPlanarForce
,IfcStructuralLoadSingleDisplacement
,IfcStructuralLoadSingleForce
,IfcStructuralLoadTemperature))
SUBTYPE OF (IfcStructuralLoadOrResult);
END_ENTITY;
*/
