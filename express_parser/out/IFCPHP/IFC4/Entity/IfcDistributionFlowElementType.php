<?php

namespace IFCPHP\IFC4\Entity;
use IFCPHP\IFC4 as IFC;

class IfcDistributionFlowElementType extends IfcDistributionElementType{

	static public $elementName = 'IFCDISTRIBUTIONFLOWELEMENTTYPE';

	static public $translationFR = 'Type d\'élément de distribution de fluide';

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
	IfcDistributionChamberElementType
	IfcEnergyConversionDeviceType
	IfcFlowControllerType
	IfcFlowFittingType
	IfcFlowMovingDeviceType
	IfcFlowSegmentType
	IfcFlowStorageDeviceType
	IfcFlowTerminalType
	IfcFlowTreatmentDeviceType
*/


/* DEFINITION
ENTITY IfcDistributionFlowElementType
ABSTRACT SUPERTYPE OF (ONEOF
(IfcDistributionChamberElementType
,IfcEnergyConversionDeviceType
,IfcFlowControllerType
,IfcFlowFittingType
,IfcFlowMovingDeviceType
,IfcFlowSegmentType
,IfcFlowStorageDeviceType
,IfcFlowTerminalType
,IfcFlowTreatmentDeviceType))
SUBTYPE OF (IfcDistributionElementType);
END_ENTITY;
*/
