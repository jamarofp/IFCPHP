<?php

namespace IFCPHP\IFC4\Entity;
use IFCPHP\IFC4 as IFC;

class IfcColourRgbList extends IfcPresentationItem{

	static public $translationFR = 'Liste de couleur RGB';

	static public $params = [
		[
			'name' => 'ColourList',
			'class' => 'Type\IfcNormalisedRatioMeasure',
			'type' => 'array',
			'optional' => false,
			'min' => 3,
			'max' => 3,
		],
	];
}
/* DEFINITION
ENTITY IfcColourRgbList
SUBTYPE OF (IfcPresentationItem);
ColourList : LIST [1:?] OF LIST [3:3] OF IfcNormalisedRatioMeasure;
END_ENTITY;
*/
