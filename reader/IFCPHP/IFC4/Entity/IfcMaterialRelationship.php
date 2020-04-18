<?php

namespace IFCPHP\IFC4\Entity;
use IFCPHP\IFC4 as IFC;

class IfcMaterialRelationship extends IfcResourceLevelRelationship{

	static public $translationFR = 'Relation entre matériaux';

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
			'name' => 'RelatingMaterial',
			'class' => 'Entity\IfcMaterial',
			'type' => 'object',
			'optional' => false,
		],
		[
			'name' => 'RelatedMaterials',
			'class' => 'Entity\IfcMaterial',
			'type' => 'array',
			'optional' => false,
			'min' => 1,
		],
		[
			'name' => 'Expression',
			'class' => 'Type\IfcLabel',
			'type' => 'object',
			'optional' => true,
		],
	];
}
/* DEFINITION
ENTITY IfcMaterialRelationship
SUBTYPE OF (IfcResourceLevelRelationship);
RelatingMaterial : IfcMaterial;
RelatedMaterials : SET [1:?] OF IfcMaterial;
Expression : OPTIONAL IfcLabel;
END_ENTITY;
*/
