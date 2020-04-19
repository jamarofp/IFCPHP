<?php

namespace IFCPHP\IFC4\Entity;
use IFCPHP\IFC4 as IFC;

class IfcFlowController extends IfcDistributionFlowElement{

	static public $elementName = 'IFCFLOWCONTROLLER';

	static public $translationFR = 'Contrôleur de débit';

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
	IfcAirTerminalBox
	IfcDamper
	IfcElectricDistributionBoard
	IfcElectricTimeControl
	IfcFlowMeter
	IfcProtectiveDevice
	IfcSwitchingDevice
	IfcValve
*/


/* DEFINITION
ENTITY IfcFlowController
SUPERTYPE OF (ONEOF
(IfcAirTerminalBox
,IfcDamper
,IfcElectricDistributionBoard
,IfcElectricTimeControl
,IfcFlowMeter
,IfcProtectiveDevice
,IfcSwitchingDevice
,IfcValve))
SUBTYPE OF (IfcDistributionFlowElement);
END_ENTITY;
*/
