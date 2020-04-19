<?php

namespace IFCPHP\IFC4\Entity;
use IFCPHP\IFC4 as IFC;

class IfcProjectedCRS extends IfcCoordinateReferenceSystem{

	static public $elementName = 'IFCPROJECTEDCRS';

	static public $params = [
		[
			'name' => 'Name',
			'class' => 'Type\IfcLabel',
			'type' => 'object',
			'optional' => true,
		],
		[
			'name' => 'Description',
			'class' => 'Type\IfcText',
			'type' => 'object',
			'optional' => true,
		],
		[
			'name' => 'GeodeticDatum',
			'class' => 'Type\IfcIdentifier',
			'type' => 'object',
			'optional' => false,
		],
		[
			'name' => 'VerticalDatum',
			'class' => 'Type\IfcIdentifier',
			'type' => 'object',
			'optional' => true,
		],
		[
			'name' => 'MapProjection',
			'class' => 'Type\IfcIdentifier',
			'type' => 'object',
			'optional' => true,
		],
		[
			'name' => 'MapZone',
			'class' => 'Type\IfcIdentifier',
			'type' => 'object',
			'optional' => true,
		],
		[
			'name' => 'MapUnit',
			'class' => 'Entity\IfcNamedUnit',
			'type' => 'object',
			'optional' => true,
		],
	];
}
/* DEFINITION
ENTITY IfcProjectedCRS
SUBTYPE OF (IfcCoordinateReferenceSystem);
MapProjection : OPTIONAL IfcIdentifier;
MapZone : OPTIONAL IfcIdentifier;
MapUnit : OPTIONAL IfcNamedUnit;
WHERE
WR11 : NOT(EXISTS(MapUnit)) OR (MapUnit.UnitType = IfcUnitEnum.LENGTHUNIT);
END_ENTITY;
*/
