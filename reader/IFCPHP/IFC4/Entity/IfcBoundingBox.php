<?php

namespace IFCPHP\IFC4\Entity;
use IFCPHP\IFC4 as IFC;

class IfcBoundingBox extends IfcGeometricRepresentationItem{

	static public $translationFR = 'Boite englobante';

	static public $params = [
		[
			'name' => 'Corner',
			'class' => 'Entity\IfcCartesianPoint',
			'type' => 'object',
			'optional' => false,
		],
		[
			'name' => 'XDim',
			'class' => 'Type\IfcPositiveLengthMeasure',
			'type' => 'object',
			'optional' => false,
		],
		[
			'name' => 'YDim',
			'class' => 'Type\IfcPositiveLengthMeasure',
			'type' => 'object',
			'optional' => false,
		],
		[
			'name' => 'ZDim',
			'class' => 'Type\IfcPositiveLengthMeasure',
			'type' => 'object',
			'optional' => false,
		],
	];
}
/* DEFINITION
ENTITY IfcBoundingBox
SUBTYPE OF (IfcGeometricRepresentationItem);
Corner : IfcCartesianPoint;
XDim : IfcPositiveLengthMeasure;
YDim : IfcPositiveLengthMeasure;
ZDim : IfcPositiveLengthMeasure;
DERIVE
Dim : IfcDimensionCount := 3;
END_ENTITY;
*/
