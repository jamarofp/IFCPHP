<?php

namespace IFCPHP\IFC4\Entity;
use IFCPHP\IFC4 as IFC;

class IfcProfileProperties extends IfcExtendedProperties{

	static public $elementName = 'IFCPROFILEPROPERTIES';

	static public $translationFR = 'Propriétés de section de profi';

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
		[
			'name' => 'ProfileDefinition',
			'class' => 'Entity\IfcProfileDef',
			'type' => 'object',
			'optional' => false,
		],
	];
}
/* DEFINITION
ENTITY IfcProfileProperties
SUBTYPE OF (IfcExtendedProperties);
ProfileDefinition : IfcProfileDef;
END_ENTITY;
*/
