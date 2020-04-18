<?php

namespace IFCPHP\IFC4\Entity;
use IFCPHP\IFC4 as IFC;

class IfcIndexedColourMap extends IfcPresentationItem{

	static public $params = [
		[
			'name' => 'MappedTo',
			'class' => 'Entity\IfcTessellatedFaceSet',
			'type' => 'object',
			'optional' => false,
		],
		[
			'name' => 'Overrides',
			'class' => 'Entity\IfcSurfaceStyleShading',
			'type' => 'object',
			'optional' => true,
		],
		[
			'name' => 'Colours',
			'class' => 'Entity\IfcColourRgbList',
			'type' => 'object',
			'optional' => false,
		],
		[
			'name' => 'ColourIndex',
			'class' => 'Base\Integer',
			'type' => 'array',
			'optional' => false,
			'min' => 1,
		],
	];
}
/* DEFINITION
ENTITY IfcIndexedColourMap
SUBTYPE OF (IfcPresentationItem);
MappedTo : IfcTessellatedFaceSet;
Overrides : OPTIONAL IfcSurfaceStyleShading;
Colours : IfcColourRgbList;
ColourIndex : LIST [1:?] OF INTEGER;
END_ENTITY;
*/
