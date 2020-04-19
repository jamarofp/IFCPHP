<?php

namespace IFCPHP\IFC4\Entity;
use IFCPHP\IFC4 as IFC;

class IfcBuildingElementType extends IfcElementType{

	static public $elementName = 'IFCBUILDINGELEMENTTYPE';

	static public $translationFR = 'Type d\'élément de construction';

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
	IfcBeamType
	IfcBuildingElementProxyType
	IfcChimneyType
	IfcColumnType
	IfcCoveringType
	IfcCurtainWallType
	IfcDoorType
	IfcFootingType
	IfcMemberType
	IfcPileType
	IfcPlateType
	IfcRailingType
	IfcRampFlightType
	IfcRampType
	IfcRoofType
	IfcShadingDeviceType
	IfcSlabType
	IfcStairFlightType
	IfcStairType
	IfcWallType
	IfcWindowType
*/


/* DEFINITION
ENTITY IfcBuildingElementType
ABSTRACT SUPERTYPE OF (ONEOF
(IfcBeamType
,IfcBuildingElementProxyType
,IfcChimneyType
,IfcColumnType
,IfcCoveringType
,IfcCurtainWallType
,IfcDoorType
,IfcFootingType
,IfcMemberType
,IfcPileType
,IfcPlateType
,IfcRailingType
,IfcRampFlightType
,IfcRampType
,IfcRoofType
,IfcShadingDeviceType
,IfcSlabType
,IfcStairFlightType
,IfcStairType
,IfcWallType
,IfcWindowType))
SUBTYPE OF (IfcElementType);
END_ENTITY;
*/
