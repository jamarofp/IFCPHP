<?php

namespace IFCPHP\IFC4\Entity;
use IFCPHP\IFC4 as IFC;

class IfcVirtualGridIntersection extends IFC\Common{

	static public $elementName = 'IFCVIRTUALGRIDINTERSECTION';

	static public $translationFR = 'Intersection virtuelle de grille ';

	static public $params = [
		[
			'name' => 'IntersectingAxes',
			'class' => 'Entity\IfcGridAxis',
			'type' => 'array',
			'optional' => false,
			'min' => 2,
			'max' => 2,
		],
		[
			'name' => 'OffsetDistances',
			'class' => 'Type\IfcLengthMeasure',
			'type' => 'array',
			'optional' => false,
			'min' => 2,
			'max' => 3,
		],
	];
}
/* DEFINITION
ENTITY IfcVirtualGridIntersection;
IntersectingAxes : LIST [2:2] OF UNIQUE IfcGridAxis;
OffsetDistances : LIST [2:3] OF IfcLengthMeasure;
END_ENTITY;
*/
