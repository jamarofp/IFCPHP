<?php

namespace IFCPHP\IFC4\Entity;
use IFCPHP\IFC4 as IFC;

class IfcTubeBundleType extends IfcEnergyConversionDeviceType{

	static public $translationFR = 'Type de faisceau tubulaire';

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
		[
			'name' => 'PredefinedType',
			'class' => 'Type\IfcTubeBundleTypeEnum',
			'type' => 'object',
			'optional' => false,
		],
	];
}
/* DEFINITION
ENTITY IfcTubeBundleType
SUBTYPE OF (IfcEnergyConversionDeviceType);
PredefinedType : IfcTubeBundleTypeEnum;
WHERE
CorrectPredefinedType : (PredefinedType <> IfcTubeBundleTypeEnum.USERDEFINED) OR
((PredefinedType = IfcTubeBundleTypeEnum.USERDEFINED) AND EXISTS(SELF\IfcElementType.ElementType));
END_ENTITY;
*/
