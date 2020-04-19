<?php

namespace IFCPHP\IFC4\Entity;
use IFCPHP\IFC4 as IFC;

class IfcExtrudedAreaSolid extends IfcSweptAreaSolid{

	static public $elementName = 'IFCEXTRUDEDAREASOLID';

	static public $params = [
		[
			'name' => 'SweptArea',
			'class' => 'Entity\IfcProfileDef',
			'type' => 'object',
			'optional' => false,
		],
		[
			'name' => 'Position',
			'class' => 'Entity\IfcAxis2Placement3D',
			'type' => 'object',
			'optional' => true,
		],
		[
			'name' => 'ExtrudedDirection',
			'class' => 'Entity\IfcDirection',
			'type' => 'object',
			'optional' => false,
		],
		[
			'name' => 'Depth',
			'class' => 'Type\IfcPositiveLengthMeasure',
			'type' => 'object',
			'optional' => false,
		],
	];
}
/* SUPERTYPE
	IfcExtrudedAreaSolidTapered
*/


/* DEFINITION
ENTITY IfcExtrudedAreaSolid
SUPERTYPE OF (ONEOF
(IfcExtrudedAreaSolidTapered))
SUBTYPE OF (IfcSweptAreaSolid);
ExtrudedDirection : IfcDirection;
Depth : IfcPositiveLengthMeasure;
WHERE
ValidExtrusionDirection : IfcDotProduct(IfcRepresentationItem() || IfcGeometricRepresentationItem() || IfcDirection([0.0,0.0,1.0]), SELF.ExtrudedDirection) <> 0.0;
END_ENTITY;
*/
