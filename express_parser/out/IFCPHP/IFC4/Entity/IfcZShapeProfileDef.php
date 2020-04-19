<?php

namespace IFCPHP\IFC4\Entity;
use IFCPHP\IFC4 as IFC;

class IfcZShapeProfileDef extends IfcParameterizedProfileDef{

	static public $elementName = 'IFCZSHAPEPROFILEDEF';

	static public $translationFR = 'Définition de section d\'un profil en Z';

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
			'name' => 'FlangeWidth',
			'class' => 'Type\IfcPositiveLengthMeasure',
			'type' => 'object',
			'optional' => false,
		],
		[
			'name' => 'WebThickness',
			'class' => 'Type\IfcPositiveLengthMeasure',
			'type' => 'object',
			'optional' => false,
		],
		[
			'name' => 'FlangeThickness',
			'class' => 'Type\IfcPositiveLengthMeasure',
			'type' => 'object',
			'optional' => false,
		],
		[
			'name' => 'FilletRadius',
			'class' => 'Type\IfcNonNegativeLengthMeasure',
			'type' => 'object',
			'optional' => true,
		],
		[
			'name' => 'EdgeRadius',
			'class' => 'Type\IfcNonNegativeLengthMeasure',
			'type' => 'object',
			'optional' => true,
		],
	];
}
/* DEFINITION
ENTITY IfcZShapeProfileDef
SUBTYPE OF (IfcParameterizedProfileDef);
Depth : IfcPositiveLengthMeasure;
FlangeWidth : IfcPositiveLengthMeasure;
WebThickness : IfcPositiveLengthMeasure;
FlangeThickness : IfcPositiveLengthMeasure;
FilletRadius : OPTIONAL IfcNonNegativeLengthMeasure;
EdgeRadius : OPTIONAL IfcNonNegativeLengthMeasure;
WHERE
ValidFlangeThickness : FlangeThickness < (Depth / 2.);
END_ENTITY;
*/
