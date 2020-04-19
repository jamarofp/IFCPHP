<?php

namespace IFCPHP\IFC4\Entity;
use IFCPHP\IFC4 as IFC;

class IfcPresentationStyle extends IFC\Common{

	static public $elementName = 'IFCPRESENTATIONSTYLE';

	static public $translationFR = 'Style de présentation';

	static public $params = [
		[
			'name' => 'Name',
			'class' => 'Type\IfcLabel',
			'type' => 'object',
			'optional' => true,
		],
	];
}
/* SUPERTYPE
	IfcCurveStyle
	IfcFillAreaStyle
	IfcSurfaceStyle
	IfcTextStyle
*/


/* DEFINITION
ENTITY IfcPresentationStyle
ABSTRACT SUPERTYPE OF (ONEOF
(IfcCurveStyle
,IfcFillAreaStyle
,IfcSurfaceStyle
,IfcTextStyle));
Name : OPTIONAL IfcLabel;
END_ENTITY;
*/
