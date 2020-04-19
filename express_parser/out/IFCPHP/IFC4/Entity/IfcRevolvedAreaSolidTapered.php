<?php

namespace IFCPHP\IFC4\Entity;
use IFCPHP\IFC4 as IFC;

class IfcRevolvedAreaSolidTapered extends IfcRevolvedAreaSolid{

	static public $elementName = 'IFCREVOLVEDAREASOLIDTAPERED';

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
			'name' => 'Axis',
			'class' => 'Entity\IfcAxis1Placement',
			'type' => 'object',
			'optional' => false,
		],
		[
			'name' => 'Angle',
			'class' => 'Type\IfcPlaneAngleMeasure',
			'type' => 'object',
			'optional' => false,
		],
		[
			'name' => 'EndSweptArea',
			'class' => 'Entity\IfcProfileDef',
			'type' => 'object',
			'optional' => false,
		],
	];
}
/* DEFINITION
ENTITY IfcRevolvedAreaSolidTapered
SUBTYPE OF (IfcRevolvedAreaSolid);
EndSweptArea : IfcProfileDef;
WHERE
CorrectProfileAssignment : IfcTaperedSweptAreaProfiles(SELF\IfcSweptAreaSolid.SweptArea, SELF.EndSweptArea);
END_ENTITY;
*/
