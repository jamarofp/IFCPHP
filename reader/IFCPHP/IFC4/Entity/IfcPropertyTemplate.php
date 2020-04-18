<?php

namespace IFCPHP\IFC4\Entity;
use IFCPHP\IFC4 as IFC;

class IfcPropertyTemplate extends IfcPropertyTemplateDefinition{

	static public $translationFR = 'Modèle de propriété';

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
	IfcComplexPropertyTemplate
	IfcSimplePropertyTemplate
*/


/* DEFINITION
ENTITY IfcPropertyTemplate
ABSTRACT SUPERTYPE OF (ONEOF
(IfcComplexPropertyTemplate
,IfcSimplePropertyTemplate))
SUBTYPE OF (IfcPropertyTemplateDefinition);
INVERSE
PartOfComplexTemplate : SET [0:?] OF IfcComplexPropertyTemplate FOR HasPropertyTemplates;
PartOfPsetTemplate : SET [0:?] OF IfcPropertySetTemplate FOR HasPropertyTemplates;
END_ENTITY;
*/
