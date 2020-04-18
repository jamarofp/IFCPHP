<?php

namespace IFCPHP\IFC4\Entity;
use IFCPHP\IFC4 as IFC;

class IfcDistributionControlElement extends IfcDistributionElement{

	static public $translationFR = 'Élément de circuit de distribution';

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
	IfcActuator
	IfcAlarm
	IfcController
	IfcFlowInstrument
	IfcProtectiveDeviceTrippingUnit
	IfcSensor
	IfcUnitaryControlElement
*/


/* DEFINITION
ENTITY IfcDistributionControlElement
SUPERTYPE OF (ONEOF
(IfcActuator
,IfcAlarm
,IfcController
,IfcFlowInstrument
,IfcProtectiveDeviceTrippingUnit
,IfcSensor
,IfcUnitaryControlElement))
SUBTYPE OF (IfcDistributionElement);
INVERSE
AssignedToFlowElement : SET [0:1] OF IfcRelFlowControlElements FOR RelatedControlElements;
END_ENTITY;
*/
