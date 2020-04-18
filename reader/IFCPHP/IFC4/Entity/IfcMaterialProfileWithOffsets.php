<?php

namespace IFCPHP\IFC4\Entity;
use IFCPHP\IFC4 as IFC;

class IfcMaterialProfileWithOffsets extends IfcMaterialProfile{

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
		[
			'name' => 'OffsetValues',
			'class' => 'Type\IfcLengthMeasure',
			'type' => 'array',
			'optional' => false,
			'min' => 1,
			'max' => 2,
		],
	];
}
/* DEFINITION
ENTITY IfcMaterialProfileWithOffsets
SUBTYPE OF (IfcMaterialProfile);
OffsetValues : ARRAY [1:2] OF IfcLengthMeasure;
END_ENTITY;
*/
