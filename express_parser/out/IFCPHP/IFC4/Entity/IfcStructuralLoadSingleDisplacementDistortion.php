<?php

namespace IFCPHP\IFC4\Entity;
use IFCPHP\IFC4 as IFC;

class IfcStructuralLoadSingleDisplacementDistortion extends IfcStructuralLoadSingleDisplacement{

	static public $elementName = 'IFCSTRUCTURALLOADSINGLEDISPLACEMENTDISTORTION';

	static public $params = [
		[
			'name' => 'Name',
			'class' => 'Type\IfcLabel',
			'type' => 'object',
			'optional' => true,
		],
		[
			'name' => 'DisplacementX',
			'class' => 'Type\IfcLengthMeasure',
			'type' => 'object',
			'optional' => true,
		],
		[
			'name' => 'DisplacementY',
			'class' => 'Type\IfcLengthMeasure',
			'type' => 'object',
			'optional' => true,
		],
		[
			'name' => 'DisplacementZ',
			'class' => 'Type\IfcLengthMeasure',
			'type' => 'object',
			'optional' => true,
		],
		[
			'name' => 'RotationalDisplacementRX',
			'class' => 'Type\IfcPlaneAngleMeasure',
			'type' => 'object',
			'optional' => true,
		],
		[
			'name' => 'RotationalDisplacementRY',
			'class' => 'Type\IfcPlaneAngleMeasure',
			'type' => 'object',
			'optional' => true,
		],
		[
			'name' => 'RotationalDisplacementRZ',
			'class' => 'Type\IfcPlaneAngleMeasure',
			'type' => 'object',
			'optional' => true,
		],
		[
			'name' => 'Distortion',
			'class' => 'Type\IfcCurvatureMeasure',
			'type' => 'object',
			'optional' => true,
		],
	];
}
/* DEFINITION
ENTITY IfcStructuralLoadSingleDisplacementDistortion
SUBTYPE OF (IfcStructuralLoadSingleDisplacement);
Distortion : OPTIONAL IfcCurvatureMeasure;
END_ENTITY;
*/
