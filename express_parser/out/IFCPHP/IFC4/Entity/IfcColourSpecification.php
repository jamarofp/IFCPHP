<?php

namespace IFCPHP\IFC4\Entity;
use IFCPHP\IFC4 as IFC;

class IfcColourSpecification extends IfcPresentationItem{

	static public $elementName = 'IFCCOLOURSPECIFICATION';

	static public $translationFR = 'Spécification de couleur';

	static public $params = [
		[
			'name' => 'Name',
			'class' => 'Type\IfcLabel',
			'type' => 'object',
			'optional' => true,
		],
	];
}
/* SUPERTYPE
	IfcColourRgb
*/


/* DEFINITION
ENTITY IfcColourSpecification
ABSTRACT SUPERTYPE OF (ONEOF
(IfcColourRgb))
SUBTYPE OF (IfcPresentationItem);
Name : OPTIONAL IfcLabel;
END_ENTITY;
*/
