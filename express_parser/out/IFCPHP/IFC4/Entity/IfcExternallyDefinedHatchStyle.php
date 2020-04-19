<?php

namespace IFCPHP\IFC4\Entity;
use IFCPHP\IFC4 as IFC;

class IfcExternallyDefinedHatchStyle extends IfcExternalReference{

	static public $elementName = 'IFCEXTERNALLYDEFINEDHATCHSTYLE';

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
ENTITY IfcExternallyDefinedHatchStyle
SUBTYPE OF (IfcExternalReference);
END_ENTITY;
*/
