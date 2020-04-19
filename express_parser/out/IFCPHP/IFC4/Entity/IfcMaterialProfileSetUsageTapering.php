<?php

namespace IFCPHP\IFC4\Entity;
use IFCPHP\IFC4 as IFC;

class IfcMaterialProfileSetUsageTapering extends IfcMaterialProfileSetUsage{

	static public $elementName = 'IFCMATERIALPROFILESETUSAGETAPERING';

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
		[
			'name' => 'ForProfileEndSet',
			'class' => 'Entity\IfcMaterialProfileSet',
			'type' => 'object',
			'optional' => false,
		],
		[
			'name' => 'CardinalEndPoint',
			'class' => 'Type\IfcCardinalPointReference',
			'type' => 'object',
			'optional' => true,
		],
	];
}
/* DEFINITION
ENTITY IfcMaterialProfileSetUsageTapering
SUBTYPE OF (IfcMaterialProfileSetUsage);
ForProfileEndSet : IfcMaterialProfileSet;
CardinalEndPoint : OPTIONAL IfcCardinalPointReference;
END_ENTITY;
*/
