<?php

namespace IFCPHP\IFC4\Entity;
use IFCPHP\IFC4 as IFC;

class IfcArbitraryClosedProfileDef extends IfcProfileDef{

	static public $elementName = 'IFCARBITRARYCLOSEDPROFILEDEF';

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
	];
}
/* SUPERTYPE
	IfcArbitraryProfileDefWithVoids
*/


/* DEFINITION
ENTITY IfcArbitraryClosedProfileDef
SUPERTYPE OF (ONEOF
(IfcArbitraryProfileDefWithVoids))
SUBTYPE OF (IfcProfileDef);
OuterCurve : IfcCurve;
WHERE
WR1 : OuterCurve.Dim = 2;
WR2 : NOT('IFC4.IFCLINE' IN TYPEOF(OuterCurve));
WR3 : NOT('IFC4.IFCOFFSETCURVE2D' IN TYPEOF(OuterCurve));
END_ENTITY;
*/
