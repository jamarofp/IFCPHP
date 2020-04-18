<?php

namespace IFCPHP\IFC4\Entity;
use IFCPHP\IFC4 as IFC;

class IfcRectangleProfileDef extends IfcParameterizedProfileDef{

	static public $translationFR = 'Définition de profil rectangulaire';

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
	];
}
/* SUPERTYPE
	IfcRectangleHollowProfileDef
	IfcRoundedRectangleProfileDef
*/


/* DEFINITION
ENTITY IfcRectangleProfileDef
SUPERTYPE OF (ONEOF
(IfcRectangleHollowProfileDef
,IfcRoundedRectangleProfileDef))
SUBTYPE OF (IfcParameterizedProfileDef);
XDim : IfcPositiveLengthMeasure;
YDim : IfcPositiveLengthMeasure;
END_ENTITY;
*/
