<?php

namespace IFCPHP\IFC4\Entity;
use IFCPHP\IFC4 as IFC;

class IfcTextLiteral extends IfcGeometricRepresentationItem{

	static public $elementName = 'IFCTEXTLITERAL';

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
	];
}
/* SUPERTYPE
	IfcTextLiteralWithExtent
*/


/* DEFINITION
ENTITY IfcTextLiteral
SUPERTYPE OF (ONEOF
(IfcTextLiteralWithExtent))
SUBTYPE OF (IfcGeometricRepresentationItem);
Literal : IfcPresentableText;
Placement : IfcAxis2Placement;
Path : IfcTextPath;
END_ENTITY;
*/
