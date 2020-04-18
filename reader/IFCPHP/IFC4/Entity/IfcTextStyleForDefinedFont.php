<?php

namespace IFCPHP\IFC4\Entity;
use IFCPHP\IFC4 as IFC;

class IfcTextStyleForDefinedFont extends IfcPresentationItem{

	static public $params = [
		[
			'name' => 'Colour',
			'class' => 'Type\IfcColour',
			'type' => 'object',
			'optional' => false,
		],
		[
			'name' => 'BackgroundColour',
			'class' => 'Type\IfcColour',
			'type' => 'object',
			'optional' => true,
		],
	];
}
/* DEFINITION
ENTITY IfcTextStyleForDefinedFont
SUBTYPE OF (IfcPresentationItem);
Colour : IfcColour;
BackgroundColour : OPTIONAL IfcColour;
END_ENTITY;
*/
