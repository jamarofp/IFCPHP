<?php

namespace IFCPHP\IFC4\Entity;
use IFCPHP\IFC4 as IFC;

class IfcTextureVertex extends IfcPresentationItem{

	static public $translationFR = 'Sommet de texture';

	static public $params = [
		[
			'name' => 'Coordinates',
			'class' => 'Type\IfcParameterValue',
			'type' => 'array',
			'optional' => false,
			'min' => 2,
			'max' => 2,
		],
	];
}
/* DEFINITION
ENTITY IfcTextureVertex
SUBTYPE OF (IfcPresentationItem);
Coordinates : LIST [2:2] OF IfcParameterValue;
END_ENTITY;
*/
