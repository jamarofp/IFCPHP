<?php

namespace IFCPHP\IFC4\Entity;
use IFCPHP\IFC4 as IFC;

class IfcPort extends IfcProduct{

	static public $translationFR = 'Port';

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
	];
}
/* SUPERTYPE
	IfcDistributionPort
*/


/* DEFINITION
ENTITY IfcPort
ABSTRACT SUPERTYPE OF (ONEOF
(IfcDistributionPort))
SUBTYPE OF (IfcProduct);
INVERSE
ContainedIn : SET [0:1] OF IfcRelConnectsPortToElement FOR RelatingPort;
ConnectedFrom : SET [0:1] OF IfcRelConnectsPorts FOR RelatedPort;
ConnectedTo : SET [0:1] OF IfcRelConnectsPorts FOR RelatingPort;
END_ENTITY;
*/
