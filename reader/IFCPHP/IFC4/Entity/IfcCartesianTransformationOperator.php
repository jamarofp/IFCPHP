<?php

namespace IFCPHP\IFC4\Entity;
use IFCPHP\IFC4 as IFC;

class IfcCartesianTransformationOperator extends IfcGeometricRepresentationItem{

	static public $translationFR = 'Opérateur de transformation cartésienne';

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
	];
}
/* SUPERTYPE
	IfcCartesianTransformationOperator2D
	IfcCartesianTransformationOperator3D
*/


/* DEFINITION
ENTITY IfcCartesianTransformationOperator
ABSTRACT SUPERTYPE OF (ONEOF
(IfcCartesianTransformationOperator2D
,IfcCartesianTransformationOperator3D))
SUBTYPE OF (IfcGeometricRepresentationItem);
Axis1 : OPTIONAL IfcDirection;
Axis2 : OPTIONAL IfcDirection;
LocalOrigin : IfcCartesianPoint;
Scale : OPTIONAL REAL;
DERIVE
Scl : REAL := NVL(Scale, 1.0);
Dim : IfcDimensionCount := LocalOrigin.Dim;
WHERE
ScaleGreaterZero : Scl > 0.0;
END_ENTITY;
*/
