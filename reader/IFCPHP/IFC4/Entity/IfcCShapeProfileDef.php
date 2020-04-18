<?php

namespace IFCPHP\IFC4\Entity;
use IFCPHP\IFC4 as IFC;

class IfcCShapeProfileDef extends IfcParameterizedProfileDef{

	static public $translationFR = 'Définition de section d\'un profil en C';

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
			'name' => 'Depth',
			'class' => 'Type\IfcPositiveLengthMeasure',
			'type' => 'object',
			'optional' => false,
		],
		[
			'name' => 'Width',
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
			'name' => 'Girth',
			'class' => 'Type\IfcPositiveLengthMeasure',
			'type' => 'object',
			'optional' => false,
		],
		[
			'name' => 'InternalFilletRadius',
			'class' => 'Type\IfcNonNegativeLengthMeasure',
			'type' => 'object',
			'optional' => true,
		],
	];
}
/* DEFINITION
ENTITY IfcCShapeProfileDef
SUBTYPE OF (IfcParameterizedProfileDef);
Depth : IfcPositiveLengthMeasure;
Width : IfcPositiveLengthMeasure;
WallThickness : IfcPositiveLengthMeasure;
Girth : IfcPositiveLengthMeasure;
InternalFilletRadius : OPTIONAL IfcNonNegativeLengthMeasure;
WHERE
ValidGirth : Girth < (Depth / 2.);
ValidInternalFilletRadius : NOT(EXISTS(InternalFilletRadius)) OR
((InternalFilletRadius <= Width/2. - WallThickness) AND (InternalFilletRadius <= Depth/2. - WallThickness));
ValidWallThickness : (WallThickness < Width/2.) AND (WallThickness < Depth/2.);
END_ENTITY;
*/
