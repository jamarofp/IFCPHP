<?php

namespace IFCPHP\IFC4\Entity;
use IFCPHP\IFC4 as IFC;

class IfcArbitraryOpenProfileDef extends IfcProfileDef{

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
			'name' => 'Curve',
			'class' => 'Entity\IfcBoundedCurve',
			'type' => 'object',
			'optional' => false,
		],
	];
}
/* SUPERTYPE
	IfcCenterLineProfileDef
*/


/* DEFINITION
ENTITY IfcArbitraryOpenProfileDef
SUPERTYPE OF (ONEOF
(IfcCenterLineProfileDef))
SUBTYPE OF (IfcProfileDef);
Curve : IfcBoundedCurve;
WHERE
WR11 : ('IFC4.IFCCENTERLINEPROFILEDEF' IN TYPEOF(SELF)) OR
(SELF\IfcProfileDef.ProfileType = IfcProfileTypeEnum.CURVE);
WR12 : Curve.Dim = 2;
END_ENTITY;
*/
