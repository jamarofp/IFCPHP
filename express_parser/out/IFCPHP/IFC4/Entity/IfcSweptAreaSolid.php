<?php

namespace IFCPHP\IFC4\Entity;
use IFCPHP\IFC4 as IFC;

class IfcSweptAreaSolid extends IfcSolidModel{

	static public $elementName = 'IFCSWEPTAREASOLID';

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
	];
}
/* SUPERTYPE
	IfcExtrudedAreaSolid
	IfcFixedReferenceSweptAreaSolid
	IfcRevolvedAreaSolid
	IfcSurfaceCurveSweptAreaSolid
*/


/* DEFINITION
ENTITY IfcSweptAreaSolid
ABSTRACT SUPERTYPE OF (ONEOF
(IfcExtrudedAreaSolid
,IfcFixedReferenceSweptAreaSolid
,IfcRevolvedAreaSolid
,IfcSurfaceCurveSweptAreaSolid))
SUBTYPE OF (IfcSolidModel);
SweptArea : IfcProfileDef;
Position : OPTIONAL IfcAxis2Placement3D;
WHERE
SweptAreaType : SweptArea.ProfileType = IfcProfileTypeEnum.Area;
END_ENTITY;
*/
