<?php

namespace IFCPHP\IFC4\Entity;
use IFCPHP\IFC4 as IFC;

class IfcComplexPropertyTemplate extends IfcPropertyTemplate{

	static public $elementName = 'IFCCOMPLEXPROPERTYTEMPLATE';

	static public $translationFR = 'Modèle de propriété complexe';

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
			'name' => 'UsageName',
			'class' => 'Type\IfcLabel',
			'type' => 'object',
			'optional' => true,
		],
		[
			'name' => 'TemplateType',
			'class' => 'Type\IfcComplexPropertyTemplateTypeEnum',
			'type' => 'object',
			'optional' => true,
		],
		[
			'name' => 'HasPropertyTemplates',
			'class' => 'Entity\IfcPropertyTemplate',
			'type' => 'array',
			'optional' => true,
			'min' => 1,
		],
	];
}
/* DEFINITION
ENTITY IfcComplexPropertyTemplate
SUBTYPE OF (IfcPropertyTemplate);
UsageName : OPTIONAL IfcLabel;
TemplateType : OPTIONAL IfcComplexPropertyTemplateTypeEnum;
HasPropertyTemplates : OPTIONAL SET [1:?] OF IfcPropertyTemplate;
WHERE
UniquePropertyNames : IfcUniquePropertyTemplateNames(HasPropertyTemplates);
NoSelfReference : SIZEOF(QUERY(temp <* HasPropertyTemplates | SELF :=: temp)) = 0;
END_ENTITY;
*/
