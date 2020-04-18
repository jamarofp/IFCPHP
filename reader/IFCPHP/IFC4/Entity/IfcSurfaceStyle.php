<?php

namespace IFCPHP\IFC4\Entity;
use IFCPHP\IFC4 as IFC;

class IfcSurfaceStyle extends IfcPresentationStyle{

	static public $translationFR = 'Style de surface';

	static public $params = [
		[
			'name' => 'Name',
			'class' => 'Type\IfcLabel',
			'type' => 'object',
			'optional' => true,
		],
		[
			'name' => 'Side',
			'class' => 'Type\IfcSurfaceSide',
			'type' => 'object',
			'optional' => false,
		],
		[
			'name' => 'Styles',
			'class' => 'Type\IfcSurfaceStyleElementSelect',
			'type' => 'array',
			'optional' => false,
			'min' => 1,
			'max' => 5,
		],
	];
}
/* DEFINITION
ENTITY IfcSurfaceStyle
SUBTYPE OF (IfcPresentationStyle);
Side : IfcSurfaceSide;
Styles : SET [1:5] OF IfcSurfaceStyleElementSelect;
WHERE
MaxOneShading : SIZEOF(QUERY(Style <* SELF.Styles |
'IFC4.IFCSURFACESTYLESHADING' IN
TYPEOF(Style)
)) <= 1;
MaxOneLighting : SIZEOF(QUERY(Style <* SELF.Styles |
'IFC4.IFCSURFACESTYLELIGHTING' IN
TYPEOF(Style)
)) <= 1;
MaxOneRefraction : SIZEOF(QUERY(Style <* SELF.Styles |
'IFC4.IFCSURFACESTYLEREFRACTION' IN
TYPEOF(Style)
)) <= 1;
MaxOneTextures : SIZEOF(QUERY(Style <* SELF.Styles |
'IFC4.IFCSURFACESTYLEWITHTEXTURES' IN
TYPEOF(Style)
)) <= 1;
MaxOneExtDefined : SIZEOF(QUERY(Style <* SELF.Styles |
'IFC4.IFCEXTERNALLYDEFINEDSURFACESTYLE' IN
TYPEOF(Style)
)) <= 1;
END_ENTITY;
*/
