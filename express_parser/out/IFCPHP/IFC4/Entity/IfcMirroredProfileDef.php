<?php

namespace IFCPHP\IFC4\Entity;
use IFCPHP\IFC4 as IFC;

class IfcMirroredProfileDef extends IfcDerivedProfileDef{

	static public $elementName = 'IFCMIRROREDPROFILEDEF';

	static public $params = [
		[
			'name' => 'ProfileType',
			'class' => 'Type\IfcProfileTypeEnum',
			'type' => 'object',
			'optional' => false,
		],
		[
			'name' => 'ProfileName',
			'class' => 'Type\IfcLabel',
			'type' => 'object',
			'optional' => true,
		],
		[
			'name' => 'ParentProfile',
			'class' => 'Entity\IfcProfileDef',
			'type' => 'object',
			'optional' => false,
		],
		[
			'name' => 'Operator',
			'class' => 'Entity\IfcCartesianTransformationOperator2D',
			'type' => 'object',
			'optional' => false,
		],
		[
			'name' => 'Label',
			'class' => 'Type\IfcLabel',
			'type' => 'object',
			'optional' => true,
		],
	];
}
/* DEFINITION
ENTITY IfcMirroredProfileDef
SUBTYPE OF (IfcDerivedProfileDef);
DERIVE
SELF\IfcDerivedProfileDef.Operator : IfcCartesianTransformationOperator2D := IfcRepresentationItem() || IfcGeometricRepresentationItem() ||
IfcCartesianTransformationOperator(
IfcRepresentationItem() || IfcGeometricRepresentationItem() ||
IfcDirection([-1., 0.]),
IfcRepresentationItem() || IfcGeometricRepresentationItem() ||
IfcDirection([ 0., 1.]),
IfcRepresentationItem() || IfcGeometricRepresentationItem() ||
IfcPoint() || IfcCartesianPoint([0., 0.]),
1.) ||
IfcCartesianTransformationOperator2D();
END_ENTITY;
*/
