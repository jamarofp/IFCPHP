<?php

namespace IFCPHP\IFC4\Entity;
use IFCPHP\IFC4 as IFC;

class IfcCoordinateReferenceSystem extends IFC\Common{

	static public $translationFR = 'Système de coordonnées de référence';

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
	];
}
/* SUPERTYPE
	IfcProjectedCRS
*/


/* DEFINITION
ENTITY IfcCoordinateReferenceSystem
ABSTRACT SUPERTYPE OF (ONEOF
(IfcProjectedCRS));
Name : OPTIONAL IfcLabel;
Description : OPTIONAL IfcText;
GeodeticDatum : IfcIdentifier;
VerticalDatum : OPTIONAL IfcIdentifier;
END_ENTITY;
*/
