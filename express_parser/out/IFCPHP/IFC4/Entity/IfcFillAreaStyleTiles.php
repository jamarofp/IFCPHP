<?php

namespace IFCPHP\IFC4\Entity;
use IFCPHP\IFC4 as IFC;

class IfcFillAreaStyleTiles extends IfcGeometricRepresentationItem{

	static public $elementName = 'IFCFILLAREASTYLETILES';

	static public $params = [
		[
			'name' => 'TilingPattern',
			'class' => 'Entity\IfcVector',
			'type' => 'array',
			'optional' => false,
			'min' => 2,
			'max' => 2,
		],
		[
			'name' => 'Tiles',
			'class' => 'Entity\IfcStyledItem',
			'type' => 'array',
			'optional' => false,
			'min' => 1,
		],
		[
			'name' => 'TilingScale',
			'class' => 'Type\IfcPositiveRatioMeasure',
			'type' => 'object',
			'optional' => false,
		],
	];
}
/* DEFINITION
ENTITY IfcFillAreaStyleTiles
SUBTYPE OF (IfcGeometricRepresentationItem);
TilingPattern : LIST [2:2] OF IfcVector;
Tiles : SET [1:?] OF IfcStyledItem;
TilingScale : IfcPositiveRatioMeasure;
END_ENTITY;
*/
