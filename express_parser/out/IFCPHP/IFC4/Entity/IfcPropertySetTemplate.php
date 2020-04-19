<?php

namespace IFCPHP\IFC4\Entity;
use IFCPHP\IFC4 as IFC;

class IfcPropertySetTemplate extends IfcPropertyTemplateDefinition{

	static public $elementName = 'IFCPROPERTYSETTEMPLATE';

	static public $translationFR = 'Modèle d\'ensemble de propriété';

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
			'name' => 'TemplateType',
			'class' => 'Type\IfcPropertySetTemplateTypeEnum',
			'type' => 'object',
			'optional' => true,
		],
		[
			'name' => 'ApplicableEntity',
			'class' => 'Type\IfcIdentifier',
			'type' => 'object',
			'optional' => true,
		],
		[
			'name' => 'HasPropertyTemplates',
			'class' => 'Entity\IfcPropertyTemplate',
			'type' => 'array',
			'optional' => false,
			'min' => 1,
		],
	];
}
/* DEFINITION
ENTITY IfcPropertySetTemplate
SUBTYPE OF (IfcPropertyTemplateDefinition);
TemplateType : OPTIONAL IfcPropertySetTemplateTypeEnum;
ApplicableEntity : OPTIONAL IfcIdentifier;
HasPropertyTemplates : SET [1:?] OF IfcPropertyTemplate;
INVERSE
Defines : SET [0:?] OF IfcRelDefinesByTemplate FOR RelatingTemplate;
WHERE
ExistsName : EXISTS(SELF\IfcRoot.Name);
UniquePropertyNames : IfcUniquePropertyTemplateNames(HasPropertyTemplates);
END_ENTITY;
*/
