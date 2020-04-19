<?php

namespace IFCPHP\IFC4\Entity;
use IFCPHP\IFC4 as IFC;

class IfcPreDefinedCurveFont extends IfcPreDefinedItem{

	static public $elementName = 'IFCPREDEFINEDCURVEFONT';

	static public $params = [
		[
			'name' => 'Name',
			'class' => 'Type\IfcLabel',
			'type' => 'object',
			'optional' => false,
		],
	];
}
/* SUPERTYPE
	IfcDraughtingPreDefinedCurveFont
*/


/* DEFINITION
ENTITY IfcPreDefinedCurveFont
ABSTRACT SUPERTYPE OF (ONEOF
(IfcDraughtingPreDefinedCurveFont))
SUBTYPE OF (IfcPreDefinedItem);
END_ENTITY;
*/
