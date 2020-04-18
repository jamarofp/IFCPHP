<?php

namespace IFCPHP\IFC4\Entity;
use IFCPHP\IFC4 as IFC;

class IfcFlowControllerType extends IfcDistributionFlowElementType{

	static public $translationFR = 'Type de contrôleur de débit';

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
	IfcAirTerminalBoxType
	IfcDamperType
	IfcElectricDistributionBoardType
	IfcElectricTimeControlType
	IfcFlowMeterType
	IfcProtectiveDeviceType
	IfcSwitchingDeviceType
	IfcValveType
*/


/* DEFINITION
ENTITY IfcFlowControllerType
ABSTRACT SUPERTYPE OF (ONEOF
(IfcAirTerminalBoxType
,IfcDamperType
,IfcElectricDistributionBoardType
,IfcElectricTimeControlType
,IfcFlowMeterType
,IfcProtectiveDeviceType
,IfcSwitchingDeviceType
,IfcValveType))
SUBTYPE OF (IfcDistributionFlowElementType);
END_ENTITY;
*/
