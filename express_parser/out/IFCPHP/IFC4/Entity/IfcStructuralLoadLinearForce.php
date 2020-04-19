<?php

namespace IFCPHP\IFC4\Entity;
use IFCPHP\IFC4 as IFC;

class IfcStructuralLoadLinearForce extends IfcStructuralLoadStatic{

	static public $elementName = 'IFCSTRUCTURALLOADLINEARFORCE';

	static public $params = [
		[
			'name' => 'Name',
			'class' => 'Type\IfcLabel',
			'type' => 'object',
			'optional' => true,
		],
		[
			'name' => 'LinearForceX',
			'class' => 'Type\IfcLinearForceMeasure',
			'type' => 'object',
			'optional' => true,
		],
		[
			'name' => 'LinearForceY',
			'class' => 'Type\IfcLinearForceMeasure',
			'type' => 'object',
			'optional' => true,
		],
		[
			'name' => 'LinearForceZ',
			'class' => 'Type\IfcLinearForceMeasure',
			'type' => 'object',
			'optional' => true,
		],
		[
			'name' => 'LinearMomentX',
			'class' => 'Type\IfcLinearMomentMeasure',
			'type' => 'object',
			'optional' => true,
		],
		[
			'name' => 'LinearMomentY',
			'class' => 'Type\IfcLinearMomentMeasure',
			'type' => 'object',
			'optional' => true,
		],
		[
			'name' => 'LinearMomentZ',
			'class' => 'Type\IfcLinearMomentMeasure',
			'type' => 'object',
			'optional' => true,
		],
	];
}
/* DEFINITION
ENTITY IfcStructuralLoadLinearForce
SUBTYPE OF (IfcStructuralLoadStatic);
LinearForceX : OPTIONAL IfcLinearForceMeasure;
LinearForceY : OPTIONAL IfcLinearForceMeasure;
LinearForceZ : OPTIONAL IfcLinearForceMeasure;
LinearMomentX : OPTIONAL IfcLinearMomentMeasure;
LinearMomentY : OPTIONAL IfcLinearMomentMeasure;
LinearMomentZ : OPTIONAL IfcLinearMomentMeasure;
END_ENTITY;
*/
