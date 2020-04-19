<?php

namespace IFCPHP\IFC4\Entity;
use IFCPHP\IFC4 as IFC;

class IfcParameterizedProfileDef extends IfcProfileDef{

	static public $elementName = 'IFCPARAMETERIZEDPROFILEDEF';

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
			'name' => 'Position',
			'class' => 'Entity\IfcAxis2Placement2D',
			'type' => 'object',
			'optional' => true,
		],
	];
}
/* SUPERTYPE
	IfcAsymmetricIShapeProfileDef
	IfcCShapeProfileDef
	IfcCircleProfileDef
	IfcEllipseProfileDef
	IfcIShapeProfileDef
	IfcLShapeProfileDef
	IfcRectangleProfileDef
	IfcTShapeProfileDef
	IfcTrapeziumProfileDef
	IfcUShapeProfileDef
	IfcZShapeProfileDef
*/


/* DEFINITION
ENTITY IfcParameterizedProfileDef
ABSTRACT SUPERTYPE OF (ONEOF
(IfcAsymmetricIShapeProfileDef
,IfcCShapeProfileDef
,IfcCircleProfileDef
,IfcEllipseProfileDef
,IfcIShapeProfileDef
,IfcLShapeProfileDef
,IfcRectangleProfileDef
,IfcTShapeProfileDef
,IfcTrapeziumProfileDef
,IfcUShapeProfileDef
,IfcZShapeProfileDef))
SUBTYPE OF (IfcProfileDef);
Position : OPTIONAL IfcAxis2Placement2D;
END_ENTITY;
*/
