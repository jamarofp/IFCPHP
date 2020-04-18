<?php

namespace IFCPHP\IFC4\Entity;
use IFCPHP\IFC4 as IFC;

class IfcMaterialProfile extends IfcMaterialDefinition{

	static public $translationFR = 'Matériau de profi';

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
			'optional' => true,
		],
		[
			'name' => 'Profile',
			'class' => 'Entity\IfcProfileDef',
			'type' => 'object',
			'optional' => false,
		],
		[
			'name' => 'Priority',
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
/* SUPERTYPE
	IfcMaterialProfileWithOffsets
*/


/* DEFINITION
ENTITY IfcMaterialProfile
SUPERTYPE OF (ONEOF
(IfcMaterialProfileWithOffsets))
SUBTYPE OF (IfcMaterialDefinition);
Name : OPTIONAL IfcLabel;
Description : OPTIONAL IfcText;
Material : OPTIONAL IfcMaterial;
Profile : IfcProfileDef;
Priority : OPTIONAL IfcNormalisedRatioMeasure;
Category : OPTIONAL IfcLabel;
INVERSE
ToMaterialProfileSet : IfcMaterialProfileSet FOR MaterialProfiles;
END_ENTITY;
*/
