<?php

namespace IFCPHP\IFC4\Entity;
use IFCPHP\IFC4 as IFC;

class IfcSweptSurface extends IfcSurface{

	static public $elementName = 'IFCSWEPTSURFACE';

	static public $translationFR = 'Surface produite par extrusion d\'une courbe le long d\'une courbe';

	static public $params = [
		[
			'name' => 'SweptCurve',
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
	IfcSurfaceOfLinearExtrusion
	IfcSurfaceOfRevolution
*/


/* DEFINITION
ENTITY IfcSweptSurface
ABSTRACT SUPERTYPE OF (ONEOF
(IfcSurfaceOfLinearExtrusion
,IfcSurfaceOfRevolution))
SUBTYPE OF (IfcSurface);
SweptCurve : IfcProfileDef;
Position : OPTIONAL IfcAxis2Placement3D;
WHERE
SweptCurveType : SweptCurve.ProfileType = IfcProfileTypeEnum.Curve;
END_ENTITY;
*/
