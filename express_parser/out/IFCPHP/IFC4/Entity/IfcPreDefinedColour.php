<?php

namespace IFCPHP\IFC4\Entity;
use IFCPHP\IFC4 as IFC;

class IfcPreDefinedColour extends IfcPreDefinedItem{

	static public $elementName = 'IFCPREDEFINEDCOLOUR';

	static public $translationFR = 'Couleur pré-définie';

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
	IfcDraughtingPreDefinedColour
*/


/* DEFINITION
ENTITY IfcPreDefinedColour
ABSTRACT SUPERTYPE OF (ONEOF
(IfcDraughtingPreDefinedColour))
SUBTYPE OF (IfcPreDefinedItem);
END_ENTITY;
*/
