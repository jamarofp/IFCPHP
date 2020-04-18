<?php

namespace IFCPHP\IFC4\Type;
use IFCPHP\IFC4 as IFC;

class IfcBSplineSurfaceForm extends IFC\Common{

	static public $translationFR = 'Forme de surface Bspline';

	static public $params = [[
		'class' => 'Base\Value',
		'type' => 'object',
		'enum' => [
			'PLANE_SURF',
			'CYLINDRICAL_SURF',
			'CONICAL_SURF',
			'SPHERICAL_SURF',
			'TOROIDAL_SURF',
			'SURF_OF_REVOLUTION',
			'RULED_SURF',
			'GENERALISED_CONE',
			'QUADRIC_SURF',
			'SURF_OF_LINEAR_EXTRUSION',
			'UNSPECIFIED',
		],
	]];
}
/* DEFINITION
TYPE IfcBSplineSurfaceForm = ENUMERATION OF
(PLANE_SURF
,CYLINDRICAL_SURF
,CONICAL_SURF
,SPHERICAL_SURF
,TOROIDAL_SURF
,SURF_OF_REVOLUTION
,RULED_SURF
,GENERALISED_CONE
,QUADRIC_SURF
,SURF_OF_LINEAR_EXTRUSION
,UNSPECIFIED);
END_TYPE;
*/
