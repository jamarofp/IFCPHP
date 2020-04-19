<?php

namespace IFCPHP\IFC4\Entity;
use IFCPHP\IFC4 as IFC;

class IfcSpatialElement extends IfcProduct{

	static public $elementName = 'IFCSPATIALELEMENT';

	static public $translationFR = 'Element spatia';

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
			'name' => 'LongName',
			'class' => 'Type\IfcLabel',
			'type' => 'object',
			'optional' => true,
		],
	];
}
/* SUPERTYPE
	IfcExternalSpatialStructureElement
	IfcSpatialStructureElement
	IfcSpatialZone
*/


/* DEFINITION
ENTITY IfcSpatialElement
ABSTRACT SUPERTYPE OF (ONEOF
(IfcExternalSpatialStructureElement
,IfcSpatialStructureElement
,IfcSpatialZone))
SUBTYPE OF (IfcProduct);
LongName : OPTIONAL IfcLabel;
INVERSE
ContainsElements : SET [0:?] OF IfcRelContainedInSpatialStructure FOR RelatingStructure;
ServicedBySystems : SET [0:?] OF IfcRelServicesBuildings FOR RelatedBuildings;
ReferencesElements : SET [0:?] OF IfcRelReferencedInSpatialStructure FOR RelatingStructure;
END_ENTITY;
*/
