<?php

namespace IFCPHP\IFC4\Entity;
use IFCPHP\IFC4 as IFC;

class IfcCartesianTransformationOperator2D extends IfcCartesianTransformationOperator{

	static public $elementName = 'IFCCARTESIANTRANSFORMATIONOPERATOR2D';

	static public $translationFR = 'Opérateur 2D de transformation cartésienne';

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
	IfcCartesianTransformationOperator2DnonUniform
*/


/* DEFINITION
ENTITY IfcCartesianTransformationOperator2D
SUPERTYPE OF (ONEOF
(IfcCartesianTransformationOperator2DnonUniform))
SUBTYPE OF (IfcCartesianTransformationOperator);
DERIVE
U : LIST [2:2] OF IfcDirection := IfcBaseAxis(2,SELF\IfcCartesianTransformationOperator.Axis1,
SELF\IfcCartesianTransformationOperator.Axis2,?);
WHERE
DimEqual2 : SELF\IfcCartesianTransformationOperator.Dim = 2;
Axis1Is2D : NOT(EXISTS(SELF\IfcCartesianTransformationOperator.Axis1)) OR
(SELF\IfcCartesianTransformationOperator.Axis1.Dim = 2);
Axis2Is2D : NOT(EXISTS(SELF\IfcCartesianTransformationOperator.Axis2)) OR
(SELF\IfcCartesianTransformationOperator.Axis2.Dim = 2);
END_ENTITY;
*/
