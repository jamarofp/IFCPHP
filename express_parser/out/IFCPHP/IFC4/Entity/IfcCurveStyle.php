<?php

namespace IFCPHP\IFC4\Entity;
use IFCPHP\IFC4 as IFC;

class IfcCurveStyle extends IfcPresentationStyle{

	static public $elementName = 'IFCCURVESTYLE';

	static public $translationFR = 'Style de courbe';

	static public $params = [
		[
			'name' => 'Name',
			'class' => 'Type\IfcLabel',
			'type' => 'object',
			'optional' => true,
		],
		[
			'name' => 'CurveFont',
			'class' => 'Type\IfcCurveFontOrScaledCurveFontSelect',
			'type' => 'object',
			'optional' => true,
		],
		[
			'name' => 'CurveWidth',
			'class' => 'Type\IfcSizeSelect',
			'type' => 'object',
			'optional' => true,
		],
		[
			'name' => 'CurveColour',
			'class' => 'Type\IfcColour',
			'type' => 'object',
			'optional' => true,
		],
		[
			'name' => 'ModelOrDraughting',
			'class' => 'Base\Boolean',
			'type' => 'object',
			'optional' => true,
		],
	];
}
/* DEFINITION
ENTITY IfcCurveStyle
SUBTYPE OF (IfcPresentationStyle);
CurveFont : OPTIONAL IfcCurveFontOrScaledCurveFontSelect;
CurveWidth : OPTIONAL IfcSizeSelect;
CurveColour : OPTIONAL IfcColour;
ModelOrDraughting : OPTIONAL BOOLEAN;
WHERE
MeasureOfWidth : (NOT(EXISTS(CurveWidth))) OR
('IFC4.IFCPOSITIVELENGTHMEASURE' IN TYPEOF(CurveWidth)) OR
(('IFC4.IFCDESCRIPTIVEMEASURE' IN TYPEOF(CurveWidth)) AND
(CurveWidth = 'by layer'));
IdentifiableCurveStyle : EXISTS(CurveFont) OR EXISTS(CurveWidth) OR EXISTS(CurveColour);
END_ENTITY;
*/
