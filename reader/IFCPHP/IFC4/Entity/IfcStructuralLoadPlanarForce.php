<?php

namespace IFCPHP\IFC4\Entity;
use IFCPHP\IFC4 as IFC;

class IfcStructuralLoadPlanarForce extends IfcStructuralLoadStatic{

	static public $params = [
		[
			'name' => 'Name',
			'class' => 'Type\IfcLabel',
			'type' => 'object',
			'optional' => true,
		],
		[
			'name' => 'PlanarForceX',
			'class' => 'Type\IfcPlanarForceMeasure',
			'type' => 'object',
			'optional' => true,
		],
		[
			'name' => 'PlanarForceY',
			'class' => 'Type\IfcPlanarForceMeasure',
			'type' => 'object',
			'optional' => true,
		],
		[
			'name' => 'PlanarForceZ',
			'class' => 'Type\IfcPlanarForceMeasure',
			'type' => 'object',
			'optional' => true,
		],
	];
}
/* DEFINITION
ENTITY IfcStructuralLoadPlanarForce
SUBTYPE OF (IfcStructuralLoadStatic);
PlanarForceX : OPTIONAL IfcPlanarForceMeasure;
PlanarForceY : OPTIONAL IfcPlanarForceMeasure;
PlanarForceZ : OPTIONAL IfcPlanarForceMeasure;
END_ENTITY;
*/
