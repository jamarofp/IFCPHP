<?php

namespace IFCPHP\IFC4\Entity;
use IFCPHP\IFC4 as IFC;

class IfcSite extends IfcSpatialStructureElement{

	static public $translationFR = 'Site';

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
		[
			'name' => 'CompositionType',
			'class' => 'Type\IfcElementCompositionEnum',
			'type' => 'object',
			'optional' => true,
		],
		[
			'name' => 'RefLatitude',
			'class' => 'Type\IfcCompoundPlaneAngleMeasure',
			'type' => 'object',
			'optional' => true,
		],
		[
			'name' => 'RefLongitude',
			'class' => 'Type\IfcCompoundPlaneAngleMeasure',
			'type' => 'object',
			'optional' => true,
		],
		[
			'name' => 'RefElevation',
			'class' => 'Type\IfcLengthMeasure',
			'type' => 'object',
			'optional' => true,
		],
		[
			'name' => 'LandTitleNumber',
			'class' => 'Type\IfcLabel',
			'type' => 'object',
			'optional' => true,
		],
		[
			'name' => 'SiteAddress',
			'class' => 'Entity\IfcPostalAddress',
			'type' => 'object',
			'optional' => true,
		],
	];
}
/* DEFINITION
ENTITY IfcSite
SUBTYPE OF (IfcSpatialStructureElement);
RefLatitude : OPTIONAL IfcCompoundPlaneAngleMeasure;
RefLongitude : OPTIONAL IfcCompoundPlaneAngleMeasure;
RefElevation : OPTIONAL IfcLengthMeasure;
LandTitleNumber : OPTIONAL IfcLabel;
SiteAddress : OPTIONAL IfcPostalAddress;
END_ENTITY;
*/
