<?php

namespace IFCPHP\IFC4\Entity;
use IFCPHP\IFC4 as IFC;

class IfcMapConversion extends IfcCoordinateOperation{

	static public $params = [
		[
			'name' => 'SourceCRS',
			'class' => 'Type\IfcCoordinateReferenceSystemSelect',
			'type' => 'object',
			'optional' => false,
		],
		[
			'name' => 'TargetCRS',
			'class' => 'Entity\IfcCoordinateReferenceSystem',
			'type' => 'object',
			'optional' => false,
		],
		[
			'name' => 'Eastings',
			'class' => 'Type\IfcLengthMeasure',
			'type' => 'object',
			'optional' => false,
		],
		[
			'name' => 'Northings',
			'class' => 'Type\IfcLengthMeasure',
			'type' => 'object',
			'optional' => false,
		],
		[
			'name' => 'OrthogonalHeight',
			'class' => 'Type\IfcLengthMeasure',
			'type' => 'object',
			'optional' => false,
		],
		[
			'name' => 'XAxisAbscissa',
			'class' => 'Type\IfcReal',
			'type' => 'object',
			'optional' => true,
		],
		[
			'name' => 'XAxisOrdinate',
			'class' => 'Type\IfcReal',
			'type' => 'object',
			'optional' => true,
		],
		[
			'name' => 'Scale',
			'class' => 'Type\IfcReal',
			'type' => 'object',
			'optional' => true,
		],
	];
}
/* DEFINITION
ENTITY IfcMapConversion
SUBTYPE OF (IfcCoordinateOperation);
Eastings : IfcLengthMeasure;
Northings : IfcLengthMeasure;
OrthogonalHeight : IfcLengthMeasure;
XAxisAbscissa : OPTIONAL IfcReal;
XAxisOrdinate : OPTIONAL IfcReal;
Scale : OPTIONAL IfcReal;
END_ENTITY;
*/
