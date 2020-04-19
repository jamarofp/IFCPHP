<?php

namespace IFCPHP\IFC4\Entity;
use IFCPHP\IFC4 as IFC;

class IfcMaterial extends IfcMaterialDefinition{

	static public $elementName = 'IFCMATERIAL';

	static public $translationFR = 'Matériau';

	static public $params = [
		[
			'name' => 'Name',
			'class' => 'Type\IfcLabel',
			'type' => 'object',
			'optional' => false,
		],
		[
			'name' => 'Description',
			'class' => 'Type\IfcText',
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
ENTITY IfcMaterial
SUBTYPE OF (IfcMaterialDefinition);
Name : IfcLabel;
Description : OPTIONAL IfcText;
Category : OPTIONAL IfcLabel;
INVERSE
HasRepresentation : SET [0:1] OF IfcMaterialDefinitionRepresentation FOR RepresentedMaterial;
IsRelatedWith : SET [0:?] OF IfcMaterialRelationship FOR RelatedMaterials;
RelatesTo : SET [0:1] OF IfcMaterialRelationship FOR RelatingMaterial;
END_ENTITY;
*/
