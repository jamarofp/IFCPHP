<?php

namespace IFCPHP\IFC4\Entity;
use IFCPHP\IFC4 as IFC;

class IfcCartesianTransformationOperator3D extends IfcCartesianTransformationOperator{

	static public $translationFR = 'Opérateur 3D de transformation cartésienne';

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
	];
}
/* SUPERTYPE
	IfcCartesianTransformationOperator3DnonUniform
*/


/* DEFINITION
ENTITY IfcCartesianTransformationOperator3D
SUPERTYPE OF (ONEOF
(IfcCartesianTransformationOperator3DnonUniform))
SUBTYPE OF (IfcCartesianTransformationOperator);
Axis3 : OPTIONAL IfcDirection;
DERIVE
U : LIST [3:3] OF IfcDirection := IfcBaseAxis(3,SELF\IfcCartesianTransformationOperator.Axis1,
SELF\IfcCartesianTransformationOperator.Axis2,Axis3);
WHERE
DimIs3D : SELF\IfcCartesianTransformationOperator.Dim = 3;
Axis1Is3D : NOT(EXISTS(SELF\IfcCartesianTransformationOperator.Axis1)) OR
(SELF\IfcCartesianTransformationOperator.Axis1.Dim = 3);
Axis2Is3D : NOT(EXISTS(SELF\IfcCartesianTransformationOperator.Axis2)) OR
(SELF\IfcCartesianTransformationOperator.Axis2.Dim = 3);
Axis3Is3D : NOT(EXISTS(Axis3)) OR (Axis3.Dim = 3);
END_ENTITY;
*/
