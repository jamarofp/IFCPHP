<?php

namespace IFCPHP\IFC4\Entity;
use IFCPHP\IFC4 as IFC;

class IfcPropertyTemplateDefinition extends IfcPropertyDefinition{

	static public $elementName = 'IFCPROPERTYTEMPLATEDEFINITION';

	static public $translationFR = 'Définition de modèle de propriété';

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
	];
}
/* SUPERTYPE
	IfcPropertySetTemplate
	IfcPropertyTemplate
*/


/* DEFINITION
ENTITY IfcPropertyTemplateDefinition
ABSTRACT SUPERTYPE OF (ONEOF
(IfcPropertySetTemplate
,IfcPropertyTemplate))
SUBTYPE OF (IfcPropertyDefinition);
END_ENTITY;
*/
