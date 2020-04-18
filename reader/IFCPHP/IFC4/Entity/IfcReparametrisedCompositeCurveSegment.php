<?php

namespace IFCPHP\IFC4\Entity;
use IFCPHP\IFC4 as IFC;

class IfcReparametrisedCompositeCurveSegment extends IfcCompositeCurveSegment{

	static public $params = [
		[
			'name' => 'Transition',
			'class' => 'Type\IfcTransitionCode',
			'type' => 'object',
			'optional' => false,
		],
		[
			'name' => 'SameSense',
			'class' => 'Base\Boolean',
			'type' => 'object',
			'optional' => false,
		],
		[
			'name' => 'ParentCurve',
			'class' => 'Entity\IfcCurve',
			'type' => 'object',
			'optional' => false,
		],
		[
			'name' => 'ParamLength',
			'class' => 'Type\IfcParameterValue',
			'type' => 'object',
			'optional' => false,
		],
	];
}
/* DEFINITION
ENTITY IfcReparametrisedCompositeCurveSegment
SUBTYPE OF (IfcCompositeCurveSegment);
ParamLength : IfcParameterValue;
WHERE
PositiveLengthParameter : ParamLength > 0.0;
END_ENTITY;
*/
