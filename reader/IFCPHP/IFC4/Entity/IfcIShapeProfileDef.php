<?php

namespace IFCPHP\IFC4\Entity;
use IFCPHP\IFC4 as IFC;

class IfcIShapeProfileDef extends IfcParameterizedProfileDef{

	static public $translationFR = 'Définition de section d\'un profil en I';

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
			'name' => 'OverallWidth',
			'class' => 'Type\IfcPositiveLengthMeasure',
			'type' => 'object',
			'optional' => false,
		],
		[
			'name' => 'OverallDepth',
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
			'name' => 'FlangeEdgeRadius',
			'class' => 'Type\IfcNonNegativeLengthMeasure',
			'type' => 'object',
			'optional' => true,
		],
		[
			'name' => 'FlangeSlope',
			'class' => 'Type\IfcPlaneAngleMeasure',
			'type' => 'object',
			'optional' => true,
		],
	];
}
/* DEFINITION
ENTITY IfcIShapeProfileDef
SUBTYPE OF (IfcParameterizedProfileDef);
OverallWidth : IfcPositiveLengthMeasure;
OverallDepth : IfcPositiveLengthMeasure;
WebThickness : IfcPositiveLengthMeasure;
FlangeThickness : IfcPositiveLengthMeasure;
FilletRadius : OPTIONAL IfcNonNegativeLengthMeasure;
FlangeEdgeRadius : OPTIONAL IfcNonNegativeLengthMeasure;
FlangeSlope : OPTIONAL IfcPlaneAngleMeasure;
WHERE
ValidFlangeThickness : (2. * FlangeThickness) < OverallDepth;
ValidWebThickness : WebThickness < OverallWidth;
ValidFilletRadius : NOT(EXISTS(FilletRadius)) OR
((FilletRadius <= (OverallWidth - WebThickness)/2.) AND
(FilletRadius <= (OverallDepth - (2. * FlangeThickness))/2.));
END_ENTITY;
*/
