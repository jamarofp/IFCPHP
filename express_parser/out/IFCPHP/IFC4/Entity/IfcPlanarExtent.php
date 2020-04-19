<?php

namespace IFCPHP\IFC4\Entity;
use IFCPHP\IFC4 as IFC;

class IfcPlanarExtent extends IfcGeometricRepresentationItem{

	static public $elementName = 'IFCPLANAREXTENT';

	static public $translationFR = 'Extension planaire';

	static public $params = [
		[
			'name' => 'SizeInX',
			'class' => 'Type\IfcLengthMeasure',
			'type' => 'object',
			'optional' => false,
		],
		[
			'name' => 'SizeInY',
			'class' => 'Type\IfcLengthMeasure',
			'type' => 'object',
			'optional' => false,
		],
	];
}
/* SUPERTYPE
	IfcPlanarBox
*/


/* DEFINITION
ENTITY IfcPlanarExtent
SUPERTYPE OF (ONEOF
(IfcPlanarBox))
SUBTYPE OF (IfcGeometricRepresentationItem);
SizeInX : IfcLengthMeasure;
SizeInY : IfcLengthMeasure;
END_ENTITY;
*/
