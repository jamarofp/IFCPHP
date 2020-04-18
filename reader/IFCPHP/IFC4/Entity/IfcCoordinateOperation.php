<?php

namespace IFCPHP\IFC4\Entity;
use IFCPHP\IFC4 as IFC;

class IfcCoordinateOperation extends IFC\Common{

	static public $translationFR = 'Opération entre systèmes de coordonnées de référence';

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
	];
}
/* SUPERTYPE
	IfcMapConversion
*/


/* DEFINITION
ENTITY IfcCoordinateOperation
ABSTRACT SUPERTYPE OF (ONEOF
(IfcMapConversion));
SourceCRS : IfcCoordinateReferenceSystemSelect;
TargetCRS : IfcCoordinateReferenceSystem;
END_ENTITY;
*/
