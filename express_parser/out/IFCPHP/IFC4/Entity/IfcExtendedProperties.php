<?php

namespace IFCPHP\IFC4\Entity;
use IFCPHP\IFC4 as IFC;

class IfcExtendedProperties extends IfcPropertyAbstraction{

	static public $elementName = 'IFCEXTENDEDPROPERTIES';

	static public $translationFR = 'Propriétés étendues';

	static public $params = [
		[
			'name' => 'Name',
			'class' => 'Type\IfcIdentifier',
			'type' => 'object',
			'optional' => true,
		],
		[
			'name' => 'Description',
			'class' => 'Type\IfcText',
			'type' => 'object',
			'optional' => true,
		],
		[
			'name' => 'Properties',
			'class' => 'Entity\IfcProperty',
			'type' => 'array',
			'optional' => false,
			'min' => 1,
		],
	];
}
/* SUPERTYPE
	IfcMaterialProperties
	IfcProfileProperties
*/


/* DEFINITION
ENTITY IfcExtendedProperties
ABSTRACT SUPERTYPE OF (ONEOF
(IfcMaterialProperties
,IfcProfileProperties))
SUBTYPE OF (IfcPropertyAbstraction);
Name : OPTIONAL IfcIdentifier;
Description : OPTIONAL IfcText;
Properties : SET [1:?] OF IfcProperty;
END_ENTITY;
*/
