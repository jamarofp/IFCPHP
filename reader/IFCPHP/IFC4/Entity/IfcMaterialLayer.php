<?php

namespace IFCPHP\IFC4\Entity;
use IFCPHP\IFC4 as IFC;

class IfcMaterialLayer extends IfcMaterialDefinition{

	static public $translationFR = 'Couche de matériau';

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
	];
}
/* SUPERTYPE
	IfcMaterialLayerWithOffsets
*/


/* DEFINITION
ENTITY IfcMaterialLayer
SUPERTYPE OF (ONEOF
(IfcMaterialLayerWithOffsets))
SUBTYPE OF (IfcMaterialDefinition);
Material : OPTIONAL IfcMaterial;
LayerThickness : IfcNonNegativeLengthMeasure;
IsVentilated : OPTIONAL IfcLogical;
Name : OPTIONAL IfcLabel;
Description : OPTIONAL IfcText;
Category : OPTIONAL IfcLabel;
Priority : OPTIONAL IfcNormalisedRatioMeasure;
INVERSE
ToMaterialLayerSet : IfcMaterialLayerSet FOR MaterialLayers;
END_ENTITY;
*/
