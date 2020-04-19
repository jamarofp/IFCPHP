<?php

namespace IFCPHP\IFC4\Entity;
use IFCPHP\IFC4 as IFC;

class IfcLightSourceGoniometric extends IfcLightSource{

	static public $elementName = 'IFCLIGHTSOURCEGONIOMETRIC';

	static public $params = [
		[
			'name' => 'Name',
			'class' => 'Type\IfcLabel',
			'type' => 'object',
			'optional' => true,
		],
		[
			'name' => 'LightColour',
			'class' => 'Entity\IfcColourRgb',
			'type' => 'object',
			'optional' => false,
		],
		[
			'name' => 'AmbientIntensity',
			'class' => 'Type\IfcNormalisedRatioMeasure',
			'type' => 'object',
			'optional' => true,
		],
		[
			'name' => 'Intensity',
			'class' => 'Type\IfcNormalisedRatioMeasure',
			'type' => 'object',
			'optional' => true,
		],
		[
			'name' => 'Position',
			'class' => 'Entity\IfcAxis2Placement3D',
			'type' => 'object',
			'optional' => false,
		],
		[
			'name' => 'ColourAppearance',
			'class' => 'Entity\IfcColourRgb',
			'type' => 'object',
			'optional' => true,
		],
		[
			'name' => 'ColourTemperature',
			'class' => 'Type\IfcThermodynamicTemperatureMeasure',
			'type' => 'object',
			'optional' => false,
		],
		[
			'name' => 'LuminousFlux',
			'class' => 'Type\IfcLuminousFluxMeasure',
			'type' => 'object',
			'optional' => false,
		],
		[
			'name' => 'LightEmissionSource',
			'class' => 'Type\IfcLightEmissionSourceEnum',
			'type' => 'object',
			'optional' => false,
		],
		[
			'name' => 'LightDistributionDataSource',
			'class' => 'Type\IfcLightDistributionDataSourceSelect',
			'type' => 'object',
			'optional' => false,
		],
	];
}
/* DEFINITION
ENTITY IfcLightSourceGoniometric
SUBTYPE OF (IfcLightSource);
Position : IfcAxis2Placement3D;
ColourAppearance : OPTIONAL IfcColourRgb;
ColourTemperature : IfcThermodynamicTemperatureMeasure;
LuminousFlux : IfcLuminousFluxMeasure;
LightEmissionSource : IfcLightEmissionSourceEnum;
LightDistributionDataSource : IfcLightDistributionDataSourceSelect;
END_ENTITY;
*/
