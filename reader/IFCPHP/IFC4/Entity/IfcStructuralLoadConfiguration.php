<?php

namespace IFCPHP\IFC4\Entity;
use IFCPHP\IFC4 as IFC;

class IfcStructuralLoadConfiguration extends IfcStructuralLoad{

	static public $params = [
		[
			'name' => 'Name',
			'class' => 'Type\IfcLabel',
			'type' => 'object',
			'optional' => true,
		],
		[
			'name' => 'Values',
			'class' => 'Entity\IfcStructuralLoadOrResult',
			'type' => 'array',
			'optional' => false,
			'min' => 1,
		],
		[
			'name' => 'Locations',
			'class' => 'Type\IfcLengthMeasure',
			'type' => 'array',
			'optional' => true,
			'min' => 1,
			'max' => 2,
		],
	];
}
/* DEFINITION
ENTITY IfcStructuralLoadConfiguration
SUBTYPE OF (IfcStructuralLoad);
Values : LIST [1:?] OF IfcStructuralLoadOrResult;
Locations : OPTIONAL LIST [1:?] OF UNIQUE LIST [1:2] OF IfcLengthMeasure;
WHERE
ValidListSize : NOT EXISTS(Locations) OR (SIZEOF(Locations) = SIZEOF(Values));
END_ENTITY;
*/
