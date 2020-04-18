<?php

namespace IFCPHP\IFC4\Entity;
use IFCPHP\IFC4 as IFC;

class IfcArbitraryProfileDefWithVoids extends IfcArbitraryClosedProfileDef{

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
			'name' => 'OuterCurve',
			'class' => 'Entity\IfcCurve',
			'type' => 'object',
			'optional' => false,
		],
		[
			'name' => 'InnerCurves',
			'class' => 'Entity\IfcCurve',
			'type' => 'array',
			'optional' => false,
			'min' => 1,
		],
	];
}
/* DEFINITION
ENTITY IfcArbitraryProfileDefWithVoids
SUBTYPE OF (IfcArbitraryClosedProfileDef);
InnerCurves : SET [1:?] OF IfcCurve;
WHERE
WR1 : SELF\IfcProfileDef.ProfileType = AREA;
WR2 : SIZEOF(QUERY(temp <* InnerCurves | temp.Dim <> 2)) = 0;
WR3 : SIZEOF(QUERY(temp <* InnerCurves | 'IFC4.IFCLINE' IN TYPEOF(temp))) = 0;
END_ENTITY;
*/
