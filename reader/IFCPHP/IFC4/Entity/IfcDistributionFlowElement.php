<?php

namespace IFCPHP\IFC4\Entity;
use IFCPHP\IFC4 as IFC;

class IfcDistributionFlowElement extends IfcDistributionElement{

	static public $translationFR = 'Elément de distribution de fluide';

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
	IfcDistributionChamberElement
	IfcEnergyConversionDevice
	IfcFlowController
	IfcFlowFitting
	IfcFlowMovingDevice
	IfcFlowSegment
	IfcFlowStorageDevice
	IfcFlowTerminal
	IfcFlowTreatmentDevice
*/


/* DEFINITION
ENTITY IfcDistributionFlowElement
SUPERTYPE OF (ONEOF
(IfcDistributionChamberElement
,IfcEnergyConversionDevice
,IfcFlowController
,IfcFlowFitting
,IfcFlowMovingDevice
,IfcFlowSegment
,IfcFlowStorageDevice
,IfcFlowTerminal
,IfcFlowTreatmentDevice))
SUBTYPE OF (IfcDistributionElement);
INVERSE
HasControlElements : SET [0:1] OF IfcRelFlowControlElements FOR RelatingFlowElement;
END_ENTITY;
*/
