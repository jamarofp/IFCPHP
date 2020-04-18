<?php

namespace IFCPHP\IFC4\Type;
use IFCPHP\IFC4 as IFC;

class IfcBSplineCurveForm extends IFC\Common{

	static public $translationFR = 'Forme de courbe Bspline';

	static public $params = [[
		'class' => 'Base\Value',
		'type' => 'object',
		'enum' => [
			'POLYLINE_FORM',
			'CIRCULAR_ARC',
			'ELLIPTIC_ARC',
			'PARABOLIC_ARC',
			'HYPERBOLIC_ARC',
			'UNSPECIFIED',
		],
	]];
}
/* DEFINITION
TYPE IfcBSplineCurveForm = ENUMERATION OF
(POLYLINE_FORM
,CIRCULAR_ARC
,ELLIPTIC_ARC
,PARABOLIC_ARC
,HYPERBOLIC_ARC
,UNSPECIFIED);
END_TYPE;
*/
