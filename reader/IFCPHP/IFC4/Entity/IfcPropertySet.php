<?php

namespace IFCPHP\IFC4\Entity;
use IFCPHP\IFC4 as IFC;

class IfcPropertySet extends IfcPropertySetDefinition{

	static public $translationFR = 'Ensemble de propriétés';

	static public $params = [
		[
			'name' => 'GlobalId',
			'class' => 'Type\IfcGloballyUniqueId',
			'type' => 'object',
			'optional' => false,
		],
		[
			'name' => 'OwnerHistory',
			'class' => 'Entity\IfcOwnerHistory',
			'type' => 'object',
			'optional' => true,
		],
		[
			'name' => 'Name',
			'class' => 'Type\IfcLabel',
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
			'name' => 'HasProperties',
			'class' => 'Entity\IfcProperty',
			'type' => 'array',
			'optional' => false,
			'min' => 1,
		],
	];
}
/* DEFINITION
ENTITY IfcPropertySet
SUBTYPE OF (IfcPropertySetDefinition);
HasProperties : SET [1:?] OF IfcProperty;
WHERE
ExistsName : EXISTS(SELF\IfcRoot.Name);
UniquePropertyNames : IfcUniquePropertyName(HasProperties);
END_ENTITY;
*/
