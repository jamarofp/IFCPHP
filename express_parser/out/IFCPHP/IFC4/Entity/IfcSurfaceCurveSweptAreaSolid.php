<?php

namespace IFCPHP\IFC4\Entity;
use IFCPHP\IFC4 as IFC;

class IfcSurfaceCurveSweptAreaSolid extends IfcSweptAreaSolid{

	static public $elementName = 'IFCSURFACECURVESWEPTAREASOLID';

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
			'name' => 'Directrix',
			'class' => 'Entity\IfcCurve',
			'type' => 'object',
			'optional' => false,
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
			'name' => 'ReferenceSurface',
			'class' => 'Entity\IfcSurface',
			'type' => 'object',
			'optional' => false,
		],
	];
}
/* DEFINITION
ENTITY IfcSurfaceCurveSweptAreaSolid
SUBTYPE OF (IfcSweptAreaSolid);
Directrix : IfcCurve;
StartParam : OPTIONAL IfcParameterValue;
EndParam : OPTIONAL IfcParameterValue;
ReferenceSurface : IfcSurface;
WHERE
DirectrixBounded : (EXISTS(StartParam) AND EXISTS(EndParam)) OR
(SIZEOF(['IFC4.IFCCONIC', 'IFC4.IFCBOUNDEDCURVE'] * TYPEOF(Directrix)) = 1);
END_ENTITY;
*/
