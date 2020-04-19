<?php

namespace IFCPHP\IFC4\Entity;
use IFCPHP\IFC4 as IFC;

class IfcExtrudedAreaSolidTapered extends IfcExtrudedAreaSolid{

	static public $elementName = 'IFCEXTRUDEDAREASOLIDTAPERED';

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
		[
			'name' => 'EndSweptArea',
			'class' => 'Entity\IfcProfileDef',
			'type' => 'object',
			'optional' => false,
		],
	];
}
/* DEFINITION
ENTITY IfcExtrudedAreaSolidTapered
SUBTYPE OF (IfcExtrudedAreaSolid);
EndSweptArea : IfcProfileDef;
WHERE
CorrectProfileAssignment : IfcTaperedSweptAreaProfiles(SELF\IfcSweptAreaSolid.SweptArea, SELF.EndSweptArea);
END_ENTITY;
*/
