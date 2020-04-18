<?php

namespace IFCPHP\IFC4\Entity;
use IFCPHP\IFC4 as IFC;

class IfcRelConnects extends IfcRelationship{

	static public $translationFR = 'Connection';

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
	];
}
/* SUPERTYPE
	IfcRelConnectsElements
	IfcRelConnectsPortToElement
	IfcRelConnectsPorts
	IfcRelConnectsStructuralActivity
	IfcRelConnectsStructuralMember
	IfcRelContainedInSpatialStructure
	IfcRelCoversBldgElements
	IfcRelCoversSpaces
	IfcRelFillsElement
	IfcRelFlowControlElements
	IfcRelInterferesElements
	IfcRelReferencedInSpatialStructure
	IfcRelSequence
	IfcRelServicesBuildings
	IfcRelSpaceBoundary
*/


/* DEFINITION
ENTITY IfcRelConnects
ABSTRACT SUPERTYPE OF (ONEOF
(IfcRelConnectsElements
,IfcRelConnectsPortToElement
,IfcRelConnectsPorts
,IfcRelConnectsStructuralActivity
,IfcRelConnectsStructuralMember
,IfcRelContainedInSpatialStructure
,IfcRelCoversBldgElements
,IfcRelCoversSpaces
,IfcRelFillsElement
,IfcRelFlowControlElements
,IfcRelInterferesElements
,IfcRelReferencedInSpatialStructure
,IfcRelSequence
,IfcRelServicesBuildings
,IfcRelSpaceBoundary))
SUBTYPE OF (IfcRelationship);
END_ENTITY;
*/
