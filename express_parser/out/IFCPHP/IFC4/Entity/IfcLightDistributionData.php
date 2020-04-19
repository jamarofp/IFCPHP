<?php

namespace IFCPHP\IFC4\Entity;
use IFCPHP\IFC4 as IFC;

class IfcLightDistributionData extends IFC\Common{

	static public $elementName = 'IFCLIGHTDISTRIBUTIONDATA';

	static public $translationFR = 'Donnée de distribution lumineuse';

	static public $params = [
		[
			'name' => 'MainPlaneAngle',
			'class' => 'Type\IfcPlaneAngleMeasure',
			'type' => 'object',
			'optional' => false,
		],
		[
			'name' => 'SecondaryPlaneAngle',
			'class' => 'Type\IfcPlaneAngleMeasure',
			'type' => 'array',
			'optional' => false,
			'min' => 1,
		],
		[
			'name' => 'LuminousIntensity',
			'class' => 'Type\IfcLuminousIntensityDistributionMeasure',
			'type' => 'array',
			'optional' => false,
			'min' => 1,
		],
	];
}
/* DEFINITION
ENTITY IfcLightDistributionData;
MainPlaneAngle : IfcPlaneAngleMeasure;
SecondaryPlaneAngle : LIST [1:?] OF IfcPlaneAngleMeasure;
LuminousIntensity : LIST [1:?] OF IfcLuminousIntensityDistributionMeasure;
END_ENTITY;
*/
