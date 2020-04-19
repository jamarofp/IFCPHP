<?php

namespace IFCPHP\IFC4\Entity;
use IFCPHP\IFC4 as IFC;

class IfcStructuralLoadSingleDisplacement extends IfcStructuralLoadStatic{

	static public $elementName = 'IFCSTRUCTURALLOADSINGLEDISPLACEMENT';

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
	];
}
/* SUPERTYPE
	IfcStructuralLoadSingleDisplacementDistortion
*/


/* DEFINITION
ENTITY IfcStructuralLoadSingleDisplacement
SUPERTYPE OF (ONEOF
(IfcStructuralLoadSingleDisplacementDistortion))
SUBTYPE OF (IfcStructuralLoadStatic);
DisplacementX : OPTIONAL IfcLengthMeasure;
DisplacementY : OPTIONAL IfcLengthMeasure;
DisplacementZ : OPTIONAL IfcLengthMeasure;
RotationalDisplacementRX : OPTIONAL IfcPlaneAngleMeasure;
RotationalDisplacementRY : OPTIONAL IfcPlaneAngleMeasure;
RotationalDisplacementRZ : OPTIONAL IfcPlaneAngleMeasure;
END_ENTITY;
*/
