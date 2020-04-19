<?php

namespace IFCPHP\IFC4\Entity;
use IFCPHP\IFC4 as IFC;

class IfcStructuralLoadSingleForce extends IfcStructuralLoadStatic{

	static public $elementName = 'IFCSTRUCTURALLOADSINGLEFORCE';

	static public $params = [
		[
			'name' => 'Name',
			'class' => 'Type\IfcLabel',
			'type' => 'object',
			'optional' => true,
		],
		[
			'name' => 'ForceX',
			'class' => 'Type\IfcForceMeasure',
			'type' => 'object',
			'optional' => true,
		],
		[
			'name' => 'ForceY',
			'class' => 'Type\IfcForceMeasure',
			'type' => 'object',
			'optional' => true,
		],
		[
			'name' => 'ForceZ',
			'class' => 'Type\IfcForceMeasure',
			'type' => 'object',
			'optional' => true,
		],
		[
			'name' => 'MomentX',
			'class' => 'Type\IfcTorqueMeasure',
			'type' => 'object',
			'optional' => true,
		],
		[
			'name' => 'MomentY',
			'class' => 'Type\IfcTorqueMeasure',
			'type' => 'object',
			'optional' => true,
		],
		[
			'name' => 'MomentZ',
			'class' => 'Type\IfcTorqueMeasure',
			'type' => 'object',
			'optional' => true,
		],
	];
}
/* SUPERTYPE
	IfcStructuralLoadSingleForceWarping
*/


/* DEFINITION
ENTITY IfcStructuralLoadSingleForce
SUPERTYPE OF (ONEOF
(IfcStructuralLoadSingleForceWarping))
SUBTYPE OF (IfcStructuralLoadStatic);
ForceX : OPTIONAL IfcForceMeasure;
ForceY : OPTIONAL IfcForceMeasure;
ForceZ : OPTIONAL IfcForceMeasure;
MomentX : OPTIONAL IfcTorqueMeasure;
MomentY : OPTIONAL IfcTorqueMeasure;
MomentZ : OPTIONAL IfcTorqueMeasure;
END_ENTITY;
*/
