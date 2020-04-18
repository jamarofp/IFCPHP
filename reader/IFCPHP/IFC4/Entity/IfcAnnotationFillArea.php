<?php

namespace IFCPHP\IFC4\Entity;
use IFCPHP\IFC4 as IFC;

class IfcAnnotationFillArea extends IfcGeometricRepresentationItem{

	static public $translationFR = 'Zone de remplissage d\'annotation';

	static public $params = [
		[
			'name' => 'OuterBoundary',
			'class' => 'Entity\IfcCurve',
			'type' => 'object',
			'optional' => false,
		],
		[
			'name' => 'InnerBoundaries',
			'class' => 'Entity\IfcCurve',
			'type' => 'array',
			'optional' => true,
			'min' => 1,
		],
	];
}
/* DEFINITION
ENTITY IfcAnnotationFillArea
SUBTYPE OF (IfcGeometricRepresentationItem);
OuterBoundary : IfcCurve;
InnerBoundaries : OPTIONAL SET [1:?] OF IfcCurve;
END_ENTITY;
*/
