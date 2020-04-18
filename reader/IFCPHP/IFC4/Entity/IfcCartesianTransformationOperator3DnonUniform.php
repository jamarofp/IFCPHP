<?php

namespace IFCPHP\IFC4\Entity;
use IFCPHP\IFC4 as IFC;

class IfcCartesianTransformationOperator3DnonUniform extends IfcCartesianTransformationOperator3D{

	static public $translationFR = 'Opérateur 3D de transformation cartésienne non uniforme';

	static public $params = [
		[
			'name' => 'Axis1',
			'class' => 'Entity\IfcDirection',
			'type' => 'object',
			'optional' => true,
		],
		[
			'name' => 'Axis2',
			'class' => 'Entity\IfcDirection',
			'type' => 'object',
			'optional' => true,
		],
		[
			'name' => 'LocalOrigin',
			'class' => 'Entity\IfcCartesianPoint',
			'type' => 'object',
			'optional' => false,
		],
		[
			'name' => 'Scale',
			'class' => 'Base\Real',
			'type' => 'object',
			'optional' => true,
		],
		[
			'name' => 'Axis3',
			'class' => 'Entity\IfcDirection',
			'type' => 'object',
			'optional' => true,
		],
		[
			'name' => 'Scale2',
			'class' => 'Base\Real',
			'type' => 'object',
			'optional' => true,
		],
		[
			'name' => 'Scale3',
			'class' => 'Base\Real',
			'type' => 'object',
			'optional' => true,
		],
	];
}
/* DEFINITION
ENTITY IfcCartesianTransformationOperator3DnonUniform
SUBTYPE OF (IfcCartesianTransformationOperator3D);
Scale2 : OPTIONAL REAL;
Scale3 : OPTIONAL REAL;
DERIVE
Scl2 : REAL := NVL(Scale2, SELF\IfcCartesianTransformationOperator.Scl);
Scl3 : REAL := NVL(Scale3, SELF\IfcCartesianTransformationOperator.Scl);
WHERE
Scale2GreaterZero : Scl2 > 0.0;
Scale3GreaterZero : Scl3 > 0.0;
END_ENTITY;
*/
