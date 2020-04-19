<?php

namespace IFCPHP\IFC4\Entity;
use IFCPHP\IFC4 as IFC;

class IfcFlowTerminalType extends IfcDistributionFlowElementType{

	static public $elementName = 'IFCFLOWTERMINALTYPE';

	static public $translationFR = 'Type d\'élément terminal d\'installation fluides';

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
	IfcAirTerminalType
	IfcAudioVisualApplianceType
	IfcCommunicationsApplianceType
	IfcElectricApplianceType
	IfcFireSuppressionTerminalType
	IfcLampType
	IfcLightFixtureType
	IfcMedicalDeviceType
	IfcOutletType
	IfcSanitaryTerminalType
	IfcSpaceHeaterType
	IfcStackTerminalType
	IfcWasteTerminalType
*/


/* DEFINITION
ENTITY IfcFlowTerminalType
ABSTRACT SUPERTYPE OF (ONEOF
(IfcAirTerminalType
,IfcAudioVisualApplianceType
,IfcCommunicationsApplianceType
,IfcElectricApplianceType
,IfcFireSuppressionTerminalType
,IfcLampType
,IfcLightFixtureType
,IfcMedicalDeviceType
,IfcOutletType
,IfcSanitaryTerminalType
,IfcSpaceHeaterType
,IfcStackTerminalType
,IfcWasteTerminalType))
SUBTYPE OF (IfcDistributionFlowElementType);
END_ENTITY;
*/
