<?php

namespace IFCPHP\IFC4\Entity;
use IFCPHP\IFC4 as IFC;

class IfcExternallyDefinedTextFont extends IfcExternalReference{

	static public $elementName = 'IFCEXTERNALLYDEFINEDTEXTFONT';

	static public $params = [
		[
			'name' => 'Location',
			'class' => 'Type\IfcURIReference',
			'type' => 'object',
			'optional' => true,
		],
		[
			'name' => 'Identification',
			'class' => 'Type\IfcIdentifier',
			'type' => 'object',
			'optional' => true,
		],
		[
			'name' => 'Name',
			'class' => 'Type\IfcLabel',
			'type' => 'object',
			'optional' => true,
		],
	];
}
/* DEFINITION
ENTITY IfcExternallyDefinedTextFont
SUBTYPE OF (IfcExternalReference);
END_ENTITY;
*/
