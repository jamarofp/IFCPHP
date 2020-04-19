<?php

namespace IFCPHP\IFC4\Entity;
use IFCPHP\IFC4 as IFC;

class IfcSweptDiskSolidPolygonal extends IfcSweptDiskSolid{

	static public $elementName = 'IFCSWEPTDISKSOLIDPOLYGONAL';

	static public $params = [
		[
			'name' => 'Directrix',
			'class' => 'Entity\IfcCurve',
			'type' => 'object',
			'optional' => false,
		],
		[
			'name' => 'Radius',
			'class' => 'Type\IfcPositiveLengthMeasure',
			'type' => 'object',
			'optional' => false,
		],
		[
			'name' => 'InnerRadius',
			'class' => 'Type\IfcPositiveLengthMeasure',
			'type' => 'object',
			'optional' => true,
		],
		[
			'name' => 'StartParam',
			'class' => 'Type\IfcParameterValue',
			'type' => 'object',
			'optional' => true,
		],
		[
			'name' => 'EndParam',
			'class' => 'Type\IfcParameterValue',
			'type' => 'object',
			'optional' => true,
		],
		[
			'name' => 'FilletRadius',
			'class' => 'Type\IfcPositiveLengthMeasure',
			'type' => 'object',
			'optional' => true,
		],
	];
}
/* DEFINITION
ENTITY IfcSweptDiskSolidPolygonal
SUBTYPE OF (IfcSweptDiskSolid);
FilletRadius : OPTIONAL IfcPositiveLengthMeasure;
WHERE
CorrectRadii : NOT(EXISTS(FilletRadius)) OR (FilletRadius >= SELF\IfcSweptDiskSolid.Radius);
DirectrixIsPolyline : 'IFC4.IFCPOLYLINE' IN TYPEOF(SELF\IfcSweptDiskSolid.Directrix);
END_ENTITY;
*/
