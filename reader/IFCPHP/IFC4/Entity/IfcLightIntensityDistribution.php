<?php

namespace IFCPHP\IFC4\Entity;
use IFCPHP\IFC4 as IFC;

class IfcLightIntensityDistribution extends IFC\Common{

	static public $translationFR = 'Distribution de l\'intensité lumineuse';

	static public $params = [
		[
			'name' => 'LightDistributionCurve',
			'class' => 'Type\IfcLightDistributionCurveEnum',
			'type' => 'object',
			'optional' => false,
		],
		[
			'name' => 'DistributionData',
			'class' => 'Entity\IfcLightDistributionData',
			'type' => 'array',
			'optional' => false,
			'min' => 1,
		],
	];
}
/* DEFINITION
ENTITY IfcLightIntensityDistribution;
LightDistributionCurve : IfcLightDistributionCurveEnum;
DistributionData : LIST [1:?] OF IfcLightDistributionData;
END_ENTITY;
*/
