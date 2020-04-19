<?php

namespace IFCPHP\IFC4\Entity;
use IFCPHP\IFC4 as IFC;

class IfcCircleProfileDef extends IfcParameterizedProfileDef{

	static public $elementName = 'IFCCIRCLEPROFILEDEF';

	static public $translationFR = 'Définition de profil circulaire';

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
			'name' => 'Radius',
			'class' => 'Type\IfcPositiveLengthMeasure',
			'type' => 'object',
			'optional' => false,
		],
	];
}
/* SUPERTYPE
	IfcCircleHollowProfileDef
*/


/* DEFINITION
ENTITY IfcCircleProfileDef
SUPERTYPE OF (ONEOF
(IfcCircleHollowProfileDef))
SUBTYPE OF (IfcParameterizedProfileDef);
Radius : IfcPositiveLengthMeasure;
END_ENTITY;
*/
