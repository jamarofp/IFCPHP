<?php

namespace IFCPHP\IFC4\Entity;
use IFCPHP\IFC4 as IFC;

class IfcCartesianTransformationOperator2DnonUniform extends IfcCartesianTransformationOperator2D{

	static public $translationFR = 'Opérateur 2D de transformation cartésienne non uniforme';

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
			'name' => 'Scale2',
			'class' => 'Base\Real',
			'type' => 'object',
			'optional' => true,
		],
	];
}
/* DEFINITION
ENTITY IfcCartesianTransformationOperator2DnonUniform
SUBTYPE OF (IfcCartesianTransformationOperator2D);
Scale2 : OPTIONAL REAL;
DERIVE
Scl2 : REAL := NVL(Scale2, SELF\IfcCartesianTransformationOperator.Scl);
WHERE
Scale2GreaterZero : Scl2 > 0.0;
END_ENTITY;
*/
