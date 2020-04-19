<?php

namespace IFCPHP\IFC4\Entity;
use IFCPHP\IFC4 as IFC;

class IfcMaterialProperties extends IfcExtendedProperties{

	static public $elementName = 'IFCMATERIALPROPERTIES';

	static public $translationFR = 'Propriétés de matériau';

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
			'name' => 'Material',
			'class' => 'Entity\IfcMaterialDefinition',
			'type' => 'object',
			'optional' => false,
		],
	];
}
/* DEFINITION
ENTITY IfcMaterialProperties
SUBTYPE OF (IfcExtendedProperties);
Material : IfcMaterialDefinition;
END_ENTITY;
*/
