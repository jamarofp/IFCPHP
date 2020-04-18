<?php

namespace IFCPHP\IFC4\Entity;
use IFCPHP\IFC4 as IFC;

class IfcPreDefinedItem extends IfcPresentationItem{

	static public $translationFR = 'Item pré-défini';

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
	IfcPreDefinedColour
	IfcPreDefinedCurveFont
	IfcPreDefinedTextFont
*/


/* DEFINITION
ENTITY IfcPreDefinedItem
ABSTRACT SUPERTYPE OF (ONEOF
(IfcPreDefinedColour
,IfcPreDefinedCurveFont
,IfcPreDefinedTextFont))
SUBTYPE OF (IfcPresentationItem);
Name : IfcLabel;
END_ENTITY;
*/
