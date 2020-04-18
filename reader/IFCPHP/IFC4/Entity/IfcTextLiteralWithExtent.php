<?php

namespace IFCPHP\IFC4\Entity;
use IFCPHP\IFC4 as IFC;

class IfcTextLiteralWithExtent extends IfcTextLiteral{

	static public $params = [
		[
			'name' => 'Literal',
			'class' => 'Type\IfcPresentableText',
			'type' => 'object',
			'optional' => false,
		],
		[
			'name' => 'Placement',
			'class' => 'Type\IfcAxis2Placement',
			'type' => 'object',
			'optional' => false,
		],
		[
			'name' => 'Path',
			'class' => 'Type\IfcTextPath',
			'type' => 'object',
			'optional' => false,
		],
		[
			'name' => 'Extent',
			'class' => 'Entity\IfcPlanarExtent',
			'type' => 'object',
			'optional' => false,
		],
		[
			'name' => 'BoxAlignment',
			'class' => 'Type\IfcBoxAlignment',
			'type' => 'object',
			'optional' => false,
		],
	];
}
/* DEFINITION
ENTITY IfcTextLiteralWithExtent
SUBTYPE OF (IfcTextLiteral);
Extent : IfcPlanarExtent;
BoxAlignment : IfcBoxAlignment;
WHERE
WR31 : NOT('IFC4.IFCPLANARBOX' IN TYPEOF(Extent));
END_ENTITY;
*/
