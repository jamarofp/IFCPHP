<?php

namespace IFCPHP\IFC4\Entity;
use IFCPHP\IFC4 as IFC;

class IfcRectangleHollowProfileDef extends IfcRectangleProfileDef{

	static public $elementName = 'IFCRECTANGLEHOLLOWPROFILEDEF';

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
			'name' => 'WallThickness',
			'class' => 'Type\IfcPositiveLengthMeasure',
			'type' => 'object',
			'optional' => false,
		],
		[
			'name' => 'InnerFilletRadius',
			'class' => 'Type\IfcNonNegativeLengthMeasure',
			'type' => 'object',
			'optional' => true,
		],
		[
			'name' => 'OuterFilletRadius',
			'class' => 'Type\IfcNonNegativeLengthMeasure',
			'type' => 'object',
			'optional' => true,
		],
	];
}
/* DEFINITION
ENTITY IfcRectangleHollowProfileDef
SUBTYPE OF (IfcRectangleProfileDef);
WallThickness : IfcPositiveLengthMeasure;
InnerFilletRadius : OPTIONAL IfcNonNegativeLengthMeasure;
OuterFilletRadius : OPTIONAL IfcNonNegativeLengthMeasure;
WHERE
ValidWallThickness : (WallThickness < (SELF\IfcRectangleProfileDef.XDim/2.)) AND
(WallThickness < (SELF\IfcRectangleProfileDef.YDim/2.));
ValidInnerRadius : NOT(EXISTS(InnerFilletRadius)) OR
((InnerFilletRadius <= (SELF\IfcRectangleProfileDef.XDim/2. - WallThickness)) AND
(InnerFilletRadius <= (SELF\IfcRectangleProfileDef.YDim/2. - WallThickness)));
ValidOuterRadius : NOT(EXISTS(OuterFilletRadius)) OR
((OuterFilletRadius <= (SELF\IfcRectangleProfileDef.XDim/2.)) AND
(OuterFilletRadius <= (SELF\IfcRectangleProfileDef.YDim/2.)));
END_ENTITY;
*/
