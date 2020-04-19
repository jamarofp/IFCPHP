<?php

namespace IFCPHP\IFC4\Entity;
use IFCPHP\IFC4 as IFC;

class IfcMaterialConstituent extends IfcMaterialDefinition{

	static public $elementName = 'IFCMATERIALCONSTITUENT';

	static public $translationFR = 'Matériau constitutif';

	static public $params = [
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
			'name' => 'Material',
			'class' => 'Entity\IfcMaterial',
			'type' => 'object',
			'optional' => false,
		],
		[
			'name' => 'Fraction',
			'class' => 'Type\IfcNormalisedRatioMeasure',
			'type' => 'object',
			'optional' => true,
		],
		[
			'name' => 'Category',
			'class' => 'Type\IfcLabel',
			'type' => 'object',
			'optional' => true,
		],
	];
}
/* DEFINITION
ENTITY IfcMaterialConstituent
SUBTYPE OF (IfcMaterialDefinition);
Name : OPTIONAL IfcLabel;
Description : OPTIONAL IfcText;
Material : IfcMaterial;
Fraction : OPTIONAL IfcNormalisedRatioMeasure;
Category : OPTIONAL IfcLabel;
INVERSE
ToMaterialConstituentSet : IfcMaterialConstituentSet FOR MaterialConstituents;
END_ENTITY;
*/
