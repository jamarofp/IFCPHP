<?php

namespace IFCPHP\IFC4\Entity;
use IFCPHP\IFC4 as IFC;

class IfcFlowTerminal extends IfcDistributionFlowElement{

	static public $elementName = 'IFCFLOWTERMINAL';

	static public $translationFR = 'Elément terminal d\'installation fluides';

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
	IfcAirTerminal
	IfcAudioVisualAppliance
	IfcCommunicationsAppliance
	IfcElectricAppliance
	IfcFireSuppressionTerminal
	IfcLamp
	IfcLightFixture
	IfcMedicalDevice
	IfcOutlet
	IfcSanitaryTerminal
	IfcSpaceHeater
	IfcStackTerminal
	IfcWasteTerminal
*/


/* DEFINITION
ENTITY IfcFlowTerminal
SUPERTYPE OF (ONEOF
(IfcAirTerminal
,IfcAudioVisualAppliance
,IfcCommunicationsAppliance
,IfcElectricAppliance
,IfcFireSuppressionTerminal
,IfcLamp
,IfcLightFixture
,IfcMedicalDevice
,IfcOutlet
,IfcSanitaryTerminal
,IfcSpaceHeater
,IfcStackTerminal
,IfcWasteTerminal))
SUBTYPE OF (IfcDistributionFlowElement);
END_ENTITY;
*/
