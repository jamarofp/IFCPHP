<?php

namespace IFCPHP\IFC4\Entity;
use IFCPHP\IFC4 as IFC;

class IfcElement extends IfcProduct{

	static public $elementName = 'IFCELEMENT';

	static public $translationFR = 'Élément';

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
	IfcBuildingElement
	IfcCivilElement
	IfcDistributionElement
	IfcElementAssembly
	IfcElementComponent
	IfcFeatureElement
	IfcFurnishingElement
	IfcGeographicElement
	IfcTransportElement
	IfcVirtualElement
*/


/* DEFINITION
ENTITY IfcElement
ABSTRACT SUPERTYPE OF (ONEOF
(IfcBuildingElement
,IfcCivilElement
,IfcDistributionElement
,IfcElementAssembly
,IfcElementComponent
,IfcFeatureElement
,IfcFurnishingElement
,IfcGeographicElement
,IfcTransportElement
,IfcVirtualElement))
SUBTYPE OF (IfcProduct);
Tag : OPTIONAL IfcIdentifier;
INVERSE
FillsVoids : SET [0:1] OF IfcRelFillsElement FOR RelatedBuildingElement;
ConnectedTo : SET [0:?] OF IfcRelConnectsElements FOR RelatingElement;
IsInterferedByElements : SET [0:?] OF IfcRelInterferesElements FOR RelatedElement;
InterferesElements : SET [0:?] OF IfcRelInterferesElements FOR RelatingElement;
HasProjections : SET [0:?] OF IfcRelProjectsElement FOR RelatingElement;
ReferencedInStructures : SET [0:?] OF IfcRelReferencedInSpatialStructure FOR RelatedElements;
HasOpenings : SET [0:?] OF IfcRelVoidsElement FOR RelatingBuildingElement;
IsConnectionRealization : SET [0:?] OF IfcRelConnectsWithRealizingElements FOR RealizingElements;
ProvidesBoundaries : SET [0:?] OF IfcRelSpaceBoundary FOR RelatedBuildingElement;
ConnectedFrom : SET [0:?] OF IfcRelConnectsElements FOR RelatedElement;
ContainedInStructure : SET [0:1] OF IfcRelContainedInSpatialStructure FOR RelatedElements;
END_ENTITY;
*/
