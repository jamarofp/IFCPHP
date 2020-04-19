<?php

namespace IFCPHP\IFC4\Entity;
use IFCPHP\IFC4 as IFC;

class IfcEllipseProfileDef extends IfcParameterizedProfileDef{

	static public $elementName = 'IFCELLIPSEPROFILEDEF';

	static public $translationFR = 'Définition de profil ellipsoïda';

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
			'name' => 'SemiAxis1',
			'class' => 'Type\IfcPositiveLengthMeasure',
			'type' => 'object',
			'optional' => false,
		],
		[
			'name' => 'SemiAxis2',
			'class' => 'Type\IfcPositiveLengthMeasure',
			'type' => 'object',
			'optional' => false,
		],
	];
}
/* DEFINITION
ENTITY IfcEllipseProfileDef
SUBTYPE OF (IfcParameterizedProfileDef);
SemiAxis1 : IfcPositiveLengthMeasure;
SemiAxis2 : IfcPositiveLengthMeasure;
END_ENTITY;
*/
