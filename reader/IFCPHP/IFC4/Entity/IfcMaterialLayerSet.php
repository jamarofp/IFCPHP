<?php

namespace IFCPHP\IFC4\Entity;
use IFCPHP\IFC4 as IFC;

class IfcMaterialLayerSet extends IfcMaterialDefinition{

	static public $translationFR = 'Ensemble de couches de matériau homogène';

	static public $params = [
		[
			'name' => 'MaterialLayers',
			'class' => 'Entity\IfcMaterialLayer',
			'type' => 'array',
			'optional' => false,
			'min' => 1,
		],
		[
			'name' => 'LayerSetName',
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
/* DEFINITION
ENTITY IfcMaterialLayerSet
SUBTYPE OF (IfcMaterialDefinition);
MaterialLayers : LIST [1:?] OF IfcMaterialLayer;
LayerSetName : OPTIONAL IfcLabel;
Description : OPTIONAL IfcText;
DERIVE
TotalThickness : IfcLengthMeasure := IfcMlsTotalThickness(SELF);
END_ENTITY;
*/
