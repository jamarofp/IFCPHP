<?php

namespace IFCPHP\IFC4\Entity;
use IFCPHP\IFC4 as IFC;

class IfcDistributionPort extends IfcPort{

	static public $elementName = 'IFCDISTRIBUTIONPORT';

	static public $translationFR = 'Port de distribution';

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
			'name' => 'FlowDirection',
			'class' => 'Type\IfcFlowDirectionEnum',
			'type' => 'object',
			'optional' => true,
		],
		[
			'name' => 'PredefinedType',
			'class' => 'Type\IfcDistributionPortTypeEnum',
			'type' => 'object',
			'optional' => true,
		],
		[
			'name' => 'SystemType',
			'class' => 'Type\IfcDistributionSystemEnum',
			'type' => 'object',
			'optional' => true,
		],
	];
}
/* DEFINITION
ENTITY IfcDistributionPort
SUBTYPE OF (IfcPort);
FlowDirection : OPTIONAL IfcFlowDirectionEnum;
PredefinedType : OPTIONAL IfcDistributionPortTypeEnum;
SystemType : OPTIONAL IfcDistributionSystemEnum;
END_ENTITY;
*/
