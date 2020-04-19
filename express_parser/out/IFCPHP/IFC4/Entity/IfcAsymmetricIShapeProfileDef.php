<?php

namespace IFCPHP\IFC4\Entity;
use IFCPHP\IFC4 as IFC;

class IfcAsymmetricIShapeProfileDef extends IfcParameterizedProfileDef{

	static public $elementName = 'IFCASYMMETRICISHAPEPROFILEDEF';

	static public $translationFR = 'Définition de section d\'un profil en I assymétrique';

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
			'name' => 'BottomFlangeWidth',
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
			'name' => 'BottomFlangeThickness',
			'class' => 'Type\IfcPositiveLengthMeasure',
			'type' => 'object',
			'optional' => false,
		],
		[
			'name' => 'BottomFlangeFilletRadius',
			'class' => 'Type\IfcNonNegativeLengthMeasure',
			'type' => 'object',
			'optional' => true,
		],
		[
			'name' => 'TopFlangeWidth',
			'class' => 'Type\IfcPositiveLengthMeasure',
			'type' => 'object',
			'optional' => false,
		],
		[
			'name' => 'TopFlangeThickness',
			'class' => 'Type\IfcPositiveLengthMeasure',
			'type' => 'object',
			'optional' => true,
		],
		[
			'name' => 'TopFlangeFilletRadius',
			'class' => 'Type\IfcNonNegativeLengthMeasure',
			'type' => 'object',
			'optional' => true,
		],
		[
			'name' => 'BottomFlangeEdgeRadius',
			'class' => 'Type\IfcNonNegativeLengthMeasure',
			'type' => 'object',
			'optional' => true,
		],
		[
			'name' => 'BottomFlangeSlope',
			'class' => 'Type\IfcPlaneAngleMeasure',
			'type' => 'object',
			'optional' => true,
		],
		[
			'name' => 'TopFlangeEdgeRadius',
			'class' => 'Type\IfcNonNegativeLengthMeasure',
			'type' => 'object',
			'optional' => true,
		],
		[
			'name' => 'TopFlangeSlope',
			'class' => 'Type\IfcPlaneAngleMeasure',
			'type' => 'object',
			'optional' => true,
		],
	];
}
/* DEFINITION
ENTITY IfcAsymmetricIShapeProfileDef
SUBTYPE OF (IfcParameterizedProfileDef);
BottomFlangeWidth : IfcPositiveLengthMeasure;
OverallDepth : IfcPositiveLengthMeasure;
WebThickness : IfcPositiveLengthMeasure;
BottomFlangeThickness : IfcPositiveLengthMeasure;
BottomFlangeFilletRadius : OPTIONAL IfcNonNegativeLengthMeasure;
TopFlangeWidth : IfcPositiveLengthMeasure;
TopFlangeThickness : OPTIONAL IfcPositiveLengthMeasure;
TopFlangeFilletRadius : OPTIONAL IfcNonNegativeLengthMeasure;
BottomFlangeEdgeRadius : OPTIONAL IfcNonNegativeLengthMeasure;
BottomFlangeSlope : OPTIONAL IfcPlaneAngleMeasure;
TopFlangeEdgeRadius : OPTIONAL IfcNonNegativeLengthMeasure;
TopFlangeSlope : OPTIONAL IfcPlaneAngleMeasure;
WHERE
ValidFlangeThickness : NOT(EXISTS(TopFlangeThickness)) OR ((BottomFlangeThickness + TopFlangeThickness) < OverallDepth);
ValidWebThickness : (WebThickness < BottomFlangeWidth) AND (WebThickness < TopFlangeWidth);
ValidBottomFilletRadius : (NOT(EXISTS(BottomFlangeFilletRadius))) OR
(BottomFlangeFilletRadius <= (BottomFlangeWidth - WebThickness)/2.);
ValidTopFilletRadius : (NOT(EXISTS(TopFlangeFilletRadius))) OR
(TopFlangeFilletRadius <= (TopFlangeWidth - WebThickness)/2.);
END_ENTITY;
*/
