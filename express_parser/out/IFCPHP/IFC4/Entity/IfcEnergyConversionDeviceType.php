<?php

namespace IFCPHP\IFC4\Entity;
use IFCPHP\IFC4 as IFC;

class IfcEnergyConversionDeviceType extends IfcDistributionFlowElementType{

	static public $elementName = 'IFCENERGYCONVERSIONDEVICETYPE';

	static public $translationFR = 'Type de dispositif de conversion d\'énergie';

	static public $params = [
		[
			'name' => 'GlobalId',
			'class' => 'Type\IfcGloballyUniqueId',
			'type' => 'object',
			'optional' => false,
		],
		[
			'name' => 'OwnerHistory',
			'class' => 'Entity\IfcOwnerHistory',
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
			'name' => 'ApplicableOccurrence',
			'class' => 'Type\IfcIdentifier',
			'type' => 'object',
			'optional' => true,
		],
		[
			'name' => 'HasPropertySets',
			'class' => 'Entity\IfcPropertySetDefinition',
			'type' => 'array',
			'optional' => true,
			'min' => 1,
		],
		[
			'name' => 'RepresentationMaps',
			'class' => 'Entity\IfcRepresentationMap',
			'type' => 'array',
			'optional' => true,
			'min' => 1,
		],
		[
			'name' => 'Tag',
			'class' => 'Type\IfcLabel',
			'type' => 'object',
			'optional' => true,
		],
		[
			'name' => 'ElementType',
			'class' => 'Type\IfcLabel',
			'type' => 'object',
			'optional' => true,
		],
	];
}
/* SUPERTYPE
	IfcAirToAirHeatRecoveryType
	IfcBoilerType
	IfcBurnerType
	IfcChillerType
	IfcCoilType
	IfcCondenserType
	IfcCooledBeamType
	IfcCoolingTowerType
	IfcElectricGeneratorType
	IfcElectricMotorType
	IfcEngineType
	IfcEvaporativeCoolerType
	IfcEvaporatorType
	IfcHeatExchangerType
	IfcHumidifierType
	IfcMotorConnectionType
	IfcSolarDeviceType
	IfcTransformerType
	IfcTubeBundleType
	IfcUnitaryEquipmentType
*/


/* DEFINITION
ENTITY IfcEnergyConversionDeviceType
ABSTRACT SUPERTYPE OF (ONEOF
(IfcAirToAirHeatRecoveryType
,IfcBoilerType
,IfcBurnerType
,IfcChillerType
,IfcCoilType
,IfcCondenserType
,IfcCooledBeamType
,IfcCoolingTowerType
,IfcElectricGeneratorType
,IfcElectricMotorType
,IfcEngineType
,IfcEvaporativeCoolerType
,IfcEvaporatorType
,IfcHeatExchangerType
,IfcHumidifierType
,IfcMotorConnectionType
,IfcSolarDeviceType
,IfcTransformerType
,IfcTubeBundleType
,IfcUnitaryEquipmentType))
SUBTYPE OF (IfcDistributionFlowElementType);
END_ENTITY;
*/
