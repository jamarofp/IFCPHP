<?php

namespace IFCPHP\IFC4\Entity;
use IFCPHP\IFC4 as IFC;

class IfcTrapeziumProfileDef extends IfcParameterizedProfileDef{

	static public $elementName = 'IFCTRAPEZIUMPROFILEDEF';

	static public $translationFR = 'Définition de section d\'un profil trapézoïda';

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
			'name' => 'BottomXDim',
			'class' => 'Type\IfcPositiveLengthMeasure',
			'type' => 'object',
			'optional' => false,
		],
		[
			'name' => 'TopXDim',
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
			'name' => 'TopXOffset',
			'class' => 'Type\IfcLengthMeasure',
			'type' => 'object',
			'optional' => false,
		],
	];
}
/* DEFINITION
ENTITY IfcTrapeziumProfileDef
SUBTYPE OF (IfcParameterizedProfileDef);
BottomXDim : IfcPositiveLengthMeasure;
TopXDim : IfcPositiveLengthMeasure;
YDim : IfcPositiveLengthMeasure;
TopXOffset : IfcLengthMeasure;
END_ENTITY;
*/
