<?php

namespace IFCPHP\IFC4\Entity;
use IFCPHP\IFC4 as IFC;

class IfcMaterialLayerSetUsage extends IfcMaterialUsageDefinition{

	static public $translationFR = 'Mise en place d\'un ensemble de couches de matériau homogène';

	static public $params = [
		[
			'name' => 'ForLayerSet',
			'class' => 'Entity\IfcMaterialLayerSet',
			'type' => 'object',
			'optional' => false,
		],
		[
			'name' => 'LayerSetDirection',
			'class' => 'Type\IfcLayerSetDirectionEnum',
			'type' => 'object',
			'optional' => false,
		],
		[
			'name' => 'DirectionSense',
			'class' => 'Type\IfcDirectionSenseEnum',
			'type' => 'object',
			'optional' => false,
		],
		[
			'name' => 'OffsetFromReferenceLine',
			'class' => 'Type\IfcLengthMeasure',
			'type' => 'object',
			'optional' => false,
		],
		[
			'name' => 'ReferenceExtent',
			'class' => 'Type\IfcPositiveLengthMeasure',
			'type' => 'object',
			'optional' => true,
		],
	];
}
/* DEFINITION
ENTITY IfcMaterialLayerSetUsage
SUBTYPE OF (IfcMaterialUsageDefinition);
ForLayerSet : IfcMaterialLayerSet;
LayerSetDirection : IfcLayerSetDirectionEnum;
DirectionSense : IfcDirectionSenseEnum;
OffsetFromReferenceLine : IfcLengthMeasure;
ReferenceExtent : OPTIONAL IfcPositiveLengthMeasure;
END_ENTITY;
*/
