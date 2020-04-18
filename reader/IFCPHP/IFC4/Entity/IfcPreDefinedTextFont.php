<?php

namespace IFCPHP\IFC4\Entity;
use IFCPHP\IFC4 as IFC;

class IfcPreDefinedTextFont extends IfcPreDefinedItem{

	static public $translationFR = 'Police de caractères pré-définie';

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
	IfcTextStyleFontModel
*/


/* DEFINITION
ENTITY IfcPreDefinedTextFont
ABSTRACT SUPERTYPE OF (ONEOF
(IfcTextStyleFontModel))
SUBTYPE OF (IfcPreDefinedItem);
END_ENTITY;
*/
