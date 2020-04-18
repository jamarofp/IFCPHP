<?php

namespace IFCPHP\IFC4\Entity;
use IFCPHP\IFC4 as IFC;

class IfcEnergyConversionDevice extends IfcDistributionFlowElement{

	static public $translationFR = 'Dispositif de conversion d\'énergie';

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
			'name' => 'ObjectType',
			'class' => 'Type\IfcLabel',
			'type' => 'object',
			'optional' => true,
		],
		[
			'name' => 'ObjectPlacement',
			'class' => 'Entity\IfcObjectPlacement',
			'type' => 'object',
			'optional' => true,
		],
		[
			'name' => 'Representation',
			'class' => 'Entity\IfcProductRepresentation',
			'type' => 'object',
			'optional' => true,
		],
		[
			'name' => 'Tag',
			'class' => 'Type\IfcIdentifier',
			'type' => 'object',
			'optional' => true,
		],
	];
}
/* SUPERTYPE
	IfcAirToAirHeatRecovery
	IfcBoiler
	IfcBurner
	IfcChiller
	IfcCoil
	IfcCondenser
	IfcCooledBeam
	IfcCoolingTower
	IfcElectricGenerator
	IfcElectricMotor
	IfcEngine
	IfcEvaporativeCooler
	IfcEvaporator
	IfcHeatExchanger
	IfcHumidifier
	IfcMotorConnection
	IfcSolarDevice
	IfcTransformer
	IfcTubeBundle
	IfcUnitaryEquipment
*/


/* DEFINITION
ENTITY IfcEnergyConversionDevice
SUPERTYPE OF (ONEOF
(IfcAirToAirHeatRecovery
,IfcBoiler
,IfcBurner
,IfcChiller
,IfcCoil
,IfcCondenser
,IfcCooledBeam
,IfcCoolingTower
,IfcElectricGenerator
,IfcElectricMotor
,IfcEngine
,IfcEvaporativeCooler
,IfcEvaporator
,IfcHeatExchanger
,IfcHumidifier
,IfcMotorConnection
,IfcSolarDevice
,IfcTransformer
,IfcTubeBundle
,IfcUnitaryEquipment))
SUBTYPE OF (IfcDistributionFlowElement);
END_ENTITY;
*/
