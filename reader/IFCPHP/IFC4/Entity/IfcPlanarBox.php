<?php

namespace IFCPHP\IFC4\Entity;
use IFCPHP\IFC4 as IFC;

class IfcPlanarBox extends IfcPlanarExtent{

	static public $translationFR = 'Boite planaire';

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
		[
			'name' => 'Placement',
			'class' => 'Type\IfcAxis2Placement',
			'type' => 'object',
			'optional' => false,
		],
	];
}
/* DEFINITION
ENTITY IfcPlanarBox
SUBTYPE OF (IfcPlanarExtent);
Placement : IfcAxis2Placement;
END_ENTITY;
*/
