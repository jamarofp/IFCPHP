<?php

namespace IFCPHP\IFC4\Entity;
use IFCPHP\IFC4 as IFC;

class IfcStructuralLoadSingleForceWarping extends IfcStructuralLoadSingleForce{

	static public $elementName = 'IFCSTRUCTURALLOADSINGLEFORCEWARPING';

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
		[
			'name' => 'WarpingMoment',
			'class' => 'Type\IfcWarpingMomentMeasure',
			'type' => 'object',
			'optional' => true,
		],
	];
}
/* DEFINITION
ENTITY IfcStructuralLoadSingleForceWarping
SUBTYPE OF (IfcStructuralLoadSingleForce);
WarpingMoment : OPTIONAL IfcWarpingMomentMeasure;
END_ENTITY;
*/
