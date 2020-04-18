<?php

namespace IFCPHP\IFC4\Entity;
use IFCPHP\IFC4 as IFC;

class IfcSimplePropertyTemplate extends IfcPropertyTemplate{

	static public $translationFR = 'Modèle de propriété simple';

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
			'class' => 'Type\IfcSimplePropertyTemplateTypeEnum',
			'type' => 'object',
			'optional' => true,
		],
		[
			'name' => 'PrimaryMeasureType',
			'class' => 'Type\IfcLabel',
			'type' => 'object',
			'optional' => true,
		],
		[
			'name' => 'SecondaryMeasureType',
			'class' => 'Type\IfcLabel',
			'type' => 'object',
			'optional' => true,
		],
		[
			'name' => 'Enumerators',
			'class' => 'Entity\IfcPropertyEnumeration',
			'type' => 'object',
			'optional' => true,
		],
		[
			'name' => 'PrimaryUnit',
			'class' => 'Type\IfcUnit',
			'type' => 'object',
			'optional' => true,
		],
		[
			'name' => 'SecondaryUnit',
			'class' => 'Type\IfcUnit',
			'type' => 'object',
			'optional' => true,
		],
		[
			'name' => 'Expression',
			'class' => 'Type\IfcLabel',
			'type' => 'object',
			'optional' => true,
		],
		[
			'name' => 'AccessState',
			'class' => 'Type\IfcStateEnum',
			'type' => 'object',
			'optional' => true,
		],
	];
}
/* DEFINITION
ENTITY IfcSimplePropertyTemplate
SUBTYPE OF (IfcPropertyTemplate);
TemplateType : OPTIONAL IfcSimplePropertyTemplateTypeEnum;
PrimaryMeasureType : OPTIONAL IfcLabel;
SecondaryMeasureType : OPTIONAL IfcLabel;
Enumerators : OPTIONAL IfcPropertyEnumeration;
PrimaryUnit : OPTIONAL IfcUnit;
SecondaryUnit : OPTIONAL IfcUnit;
Expression : OPTIONAL IfcLabel;
AccessState : OPTIONAL IfcStateEnum;
END_ENTITY;
*/
