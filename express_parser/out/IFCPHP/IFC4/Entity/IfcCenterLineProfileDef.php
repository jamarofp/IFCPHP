<?php

namespace IFCPHP\IFC4\Entity;
use IFCPHP\IFC4 as IFC;

class IfcCenterLineProfileDef extends IfcArbitraryOpenProfileDef{

	static public $elementName = 'IFCCENTERLINEPROFILEDEF';

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
		[
			'name' => 'Thickness',
			'class' => 'Type\IfcPositiveLengthMeasure',
			'type' => 'object',
			'optional' => false,
		],
	];
}
/* DEFINITION
ENTITY IfcCenterLineProfileDef
SUBTYPE OF (IfcArbitraryOpenProfileDef);
Thickness : IfcPositiveLengthMeasure;
END_ENTITY;
*/
