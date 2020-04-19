<?php

namespace IFCPHP\IFC4\Entity;
use IFCPHP\IFC4 as IFC;

class IfcRoundedRectangleProfileDef extends IfcRectangleProfileDef{

	static public $elementName = 'IFCROUNDEDRECTANGLEPROFILEDEF';

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
		[
			'name' => 'XDim',
			'class' => 'Type\IfcPositiveLengthMeasure',
			'type' => 'object',
			'optional' => false,
		],
		[
			'name' => 'YDim',
			'class' => 'Type\IfcPositiveLengthMeasure',
			'type' => 'object',
			'optional' => false,
		],
		[
			'name' => 'RoundingRadius',
			'class' => 'Type\IfcPositiveLengthMeasure',
			'type' => 'object',
			'optional' => false,
		],
	];
}
/* DEFINITION
ENTITY IfcRoundedRectangleProfileDef
SUBTYPE OF (IfcRectangleProfileDef);
RoundingRadius : IfcPositiveLengthMeasure;
WHERE
ValidRadius : ((RoundingRadius <= (SELF\IfcRectangleProfileDef.XDim/2.)) AND
(RoundingRadius <= (SELF\IfcRectangleProfileDef.YDim/2.)));
END_ENTITY;
*/
