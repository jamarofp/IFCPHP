<?php

namespace IFCPHP\IFC4\Entity;
use IFCPHP\IFC4 as IFC;

class IfcMaterialLayerWithOffsets extends IfcMaterialLayer{

	static public $elementName = 'IFCMATERIALLAYERWITHOFFSETS';

	static public $translationFR = 'Couche de matériau avec décalage';

	static public $params = [
		[
			'name' => 'Material',
			'class' => 'Entity\IfcMaterial',
			'type' => 'object',
			'optional' => true,
		],
		[
			'name' => 'LayerThickness',
			'class' => 'Type\IfcNonNegativeLengthMeasure',
			'type' => 'object',
			'optional' => false,
		],
		[
			'name' => 'IsVentilated',
			'class' => 'Type\IfcLogical',
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
			'name' => 'Category',
			'class' => 'Type\IfcLabel',
			'type' => 'object',
			'optional' => true,
		],
		[
			'name' => 'Priority',
			'class' => 'Type\IfcNormalisedRatioMeasure',
			'type' => 'object',
			'optional' => true,
		],
		[
			'name' => 'OffsetDirection',
			'class' => 'Type\IfcLayerSetDirectionEnum',
			'type' => 'object',
			'optional' => false,
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
ENTITY IfcMaterialLayerWithOffsets
SUBTYPE OF (IfcMaterialLayer);
OffsetDirection : IfcLayerSetDirectionEnum;
OffsetValues : ARRAY [1:2] OF IfcLengthMeasure;
END_ENTITY;
*/
