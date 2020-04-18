<?php

namespace IFCPHP\IFC4\Entity;
use IFCPHP\IFC4 as IFC;

class IfcSweptDiskSolid extends IfcSolidModel{

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
	];
}
/* SUPERTYPE
	IfcSweptDiskSolidPolygonal
*/


/* DEFINITION
ENTITY IfcSweptDiskSolid
SUPERTYPE OF (ONEOF
(IfcSweptDiskSolidPolygonal))
SUBTYPE OF (IfcSolidModel);
Directrix : IfcCurve;
Radius : IfcPositiveLengthMeasure;
InnerRadius : OPTIONAL IfcPositiveLengthMeasure;
StartParam : OPTIONAL IfcParameterValue;
EndParam : OPTIONAL IfcParameterValue;
WHERE
DirectrixDim : Directrix.Dim = 3;
InnerRadiusSize : (NOT EXISTS(InnerRadius)) OR (Radius > InnerRadius);
DirectrixBounded : (EXISTS(StartParam) AND EXISTS(EndParam)) OR
(SIZEOF(['IFC4.IFCCONIC', 'IFC4.IFCBOUNDEDCURVE'] * TYPEOF(Directrix)) = 1);
END_ENTITY;
*/
