<?php

namespace IFCPHP\IFC4\Entity;
use IFCPHP\IFC4 as IFC;

class IfcMaterialProfileSetUsage extends IfcMaterialUsageDefinition{

	static public $elementName = 'IFCMATERIALPROFILESETUSAGE';

	static public $translationFR = 'Mise en place d\'un ensemble de matériaux de profi';

	static public $params = [
		[
			'name' => 'ForProfileSet',
			'class' => 'Entity\IfcMaterialProfileSet',
			'type' => 'object',
			'optional' => false,
		],
		[
			'name' => 'CardinalPoint',
			'class' => 'Type\IfcCardinalPointReference',
			'type' => 'object',
			'optional' => true,
		],
		[
			'name' => 'ReferenceExtent',
			'class' => 'Type\IfcPositiveLengthMeasure',
			'type' => 'object',
			'optional' => true,
		],
	];
}
/* SUPERTYPE
	IfcMaterialProfileSetUsageTapering
*/


/* DEFINITION
ENTITY IfcMaterialProfileSetUsage
SUPERTYPE OF (ONEOF
(IfcMaterialProfileSetUsageTapering))
SUBTYPE OF (IfcMaterialUsageDefinition);
ForProfileSet : IfcMaterialProfileSet;
CardinalPoint : OPTIONAL IfcCardinalPointReference;
ReferenceExtent : OPTIONAL IfcPositiveLengthMeasure;
END_ENTITY;
*/
